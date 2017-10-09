<?php

function getDB() {
  global $dataBase;
  
  if($dataBase == null) {
    $dataBase = new DataBase();
  }

  return $dataBase->getConnection();
}

function runSQL($db, $query, $params='', $fetch='') {
  try {
    $stmt = $db->prepare($query);
    $stmt->execute($params ? $params : array());
  } catch(PDOException $ex) {
    print_r($ex->getMessage());
  }
  if($fetch != '') {
    return $stmt->$fetch(PDO::FETCH_ASSOC);
  } else {
    if(strtoupper(substr($query, 0, 6)) == 'INSERT') {
      return $db->lastInsertId();
    }
  }
}

function insert($name, array $fields) {
  $db = getDB();
  $params = buildQueryParams($fields);
  $query = "INSERT INTO ".$name."(".join(", ", array_keys($fields)).") VALUES(".join(", ", array_keys($params)).")";
  return runSQL($db, $query, $params, '');
}

function update($name, array $fields, array $conditions) {
  $db = getDB();
  $query = 'UPDATE '.$name.' SET '
  .join(', ', preg_replace('/(^.*)/', '$1=:$1', array_keys($fields))).' WHERE '
  .join(' AND ', preg_replace('/(^.*)/', '$1=:cond_$1', array_keys($conditions)));
  $params = array_merge(buildQueryParams($fields), buildQueryParams($conditions, 'cond_'));
  runSQL($db, $query, $params, '');
}

function deleteRow($name, array $conditions) {
  $db = getDB();
  $query = "DELETE FROM ".$name." WHERE ".join(' AND ', preg_replace('/(^.*)/', '$1=:$1', array_keys($conditions)));
  $params = buildQueryParams($conditions);
  return runSQL($db, $query, $params, '');
}

function getRow($name, array $conditions) {
  $db = getDB();
  $query = 'SELECT * FROM '.$name.' WHERE '.join(' AND ', preg_replace('/(^.*)/', '$1=:$1', array_keys($conditions)));
  $params = buildQueryParams($conditions);
  return runSQL($db, $query, $params, 'fetch');
}

function getAllRows($name, array $conditions) {
  $db = getDB();
  $query = 'SELECT * FROM '.$name.' WHERE '.join(' AND ', preg_replace('/(^.*)/', '$1=:$1', array_keys($conditions))); 
  $params = buildQueryParams($conditions);
  return runSQL($db, $query, $params, 'fetchAll');
}

function getTable($table_name) {
  $db = getDB();
  $query = 'SELECT * FROM '.$table_name;
  return runSQL($db, $query, '', 'fetchAll');
}

function login($email, $password) {
  $user = getRow('users', array('email'=>$email)); 
  return encryptPassword($password) === $user['password'] ? $user : '';
}
