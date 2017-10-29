
In development of new functionality, not in production, just for test made by intern.

<?php

#localhost/search.php?search=<script>alert('xss is possible here')</script>
$searching = $_GET['searching'] ?? null;
echo 'Results of searching are '.$searching;

?>
