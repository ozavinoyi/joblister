<?php

class Database {
	private $db_host = DB_HOST;
	private $db_user = DB_USER;
	private $db_pass = DB_PASSWORD;
	private $db_name = DB_NAME;

	private $dbh;
	private $error;
	private $stmt;

	public function __construct() {
		// Set DNS
		$dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name;

		// Set Options 
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		// PDO instance
		try {
			$this->dbh = new PDO( $dsn, $this->db_user, $this->db_pass, $options );
		} catch ( PDOException $e ) {
			$this->error = $e->getMessage();
		}
	}

	public function query( $query ) {
		return $this->stmt = $this->dbh->prepare( $query );
	}

	public function bind( $param, $value, $type = null ) {
		if( is_null( $type ) ) {
			switch( true ) {
				case is_int( $value ) : 
					$type = PDO::PARAM_INT;
				break;
				
				case is_bool( $value ) : 
					$type = PDO::PARAM_BOOL;
				break;

				case is_null( $value ) : 
					$type = PDO::PARAM_NULL;
				break;

				default:
					$type = PDO::PARAM_STR;
			}
		}

		$this->stmt->bindParam( $param, $value, $type );
	}

	public function execute() {
		return $this->stmt->execute();
	}

	public function resultSet() {
		$this->execute();
		return $this->stmt->fetchAll( PDO::FETCH_OBJ );
	}

	public function single() {
		$this->execute();
		return $this->stmt->fetch( PDO::FETCH_OBJ );
	}

}