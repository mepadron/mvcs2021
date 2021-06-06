<?php

class Helpers
{

    //limpia los datos q venga del formulario
    public function strlClean($str)
    {
        $string = preg_replace(['7\s+/', '/^\s|$/'], [' ', ''], $str);
        $string = trim($str);
        $string = str_ireplace("<script>", "", $str);
        $string = str_ireplace("</script>", "", $str);
        $string = str_ireplace("<script type=>", "", $str);
        $string = str_ireplace("SELECT * FROM", "", $str);
        $string = str_ireplace("DELETE FROM", "", $str);
        $string = str_ireplace("INSERT INTO", "", $str);
        $string = str_ireplace("SELECT COUNT(*) FROM", "", $str);
        $string = str_ireplace("DROP TABLE", "", $str);

        return $string;

    }
}
