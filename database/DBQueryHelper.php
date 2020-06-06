<?php


class DBQueryHelper{

  public static function query($sql)
  {
    global $conn;
    return mysqli_query($conn,$sql);
  }

  public static function dbError()
  {
    global $conn;
    return mysqli_error($conn);
  }

  public static function countResults($sql)
  {
    global $conn;
    return mysqli_num_rows(DBQueryHelper::query($sql));
  }
}
