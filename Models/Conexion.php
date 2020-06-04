<?php
class Conexion
{
    public function query($sql, $params = [], $date = [])
    {
        try {
            $statemen = $this->connection()->prepare($sql);
            for ($i = 0; $i < count($params); $i++) {
                $statemen->bindParam($i + 1, $params[$i], $this->date($date[$i]));
            }
            $statemen->execute();

            $result = $statemen->fetchAll();

            return $result;
        } catch (Exception $ex) {
            return null;
        }
    }

    public  function connection()
    {
        try{
            return new PDO("mysql:host=localhost;dbname=new_qux", "root", "");
        }catch(Exception $ex){
            return null;
        }
    }

    public  function date($date)
    {
        try{
            switch ($date) {
                case 'i':
                    return PDO::PARAM_INT;
                    break;
                case 's':
                    return PDO::PARAM_STR;
                    break;
                case 'b':
                    return PDO::PARAM_BOOL;
                    break;
            }
        }catch(Exception $ex){
            return null;
        }
    }
}
