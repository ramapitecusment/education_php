<html>
<head>
    <title>Классы Table и HTMLTable</title>
</head>
<body>
<?php

class Tabless
{
    public $headers = [];
    public $data = [];
    function Tables( $headers )
    {
        $this->headers = $headers;
    }
    function addRow ( $row )
    {
        $tmp = [];
        foreach ( $this->headers as $header )
        {
            if ( ! isset( $row[$header] )) $row[$header] = "";
            $tmp[] = $row[$header];
        }
        array_push ( $this->data, $tmp );
    }
    function output ()
    {
        echo "<PRE><B>";
        foreach ( $this->headers as $header ) echo "$header  ";
        echo "</B><BR>";
        foreach ( $this->data as $y )
        {
            foreach ( $y as $x ) echo "$x  ";
            echo "<BR>";
        }
        echo "</PRE>";
    }
}

class Hello extends Tabless
{
    public $cellpadding = "2";
    public $bgcolor;
    function __construct ( $headers, $bg="FFFFFF" )
    {
        Tabless::Tables( $headers );
        $this->bgcolor = $bg;
    }
    function setCellpadding ( $padding )
    {
        $this->cellpadding = $padding;
    }
    function output ()
    {
        echo "<table cellpadding='".$this->cellpadding."'><tr>";
        foreach ( $this->headers as $header )
            echo "<th bgcolor='".$this->bgcolor."'>".$header;
        foreach ( $this->data as $y )
        {
            echo "<tr>";
            foreach ( $y as $x )
                echo "<td bgcolor='".$this->bgcolor."'>$x";
        }
        echo "</table>";
    }
}

$test = new Hello ( array("a","b","c"), "#00FFFF" );
$test->setCellpadding ( 7 );
$test->addRow(array("a"=>1,"b"=>3,"c"=>2));
$test->addRow(array("b"=>1,"a"=>3));
$test->addRow(array("c"=>1,"b"=>3,"a"=>4));
$test->output();
?>
</body>
</html>