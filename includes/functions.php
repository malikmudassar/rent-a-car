<?php
	/* The functions file, containing all application specific functions */
	function get_rows($table)
	{
		global $PDO;
		$st=$PDO->prepare('Select * from '.$table);
		$data=$st->execute();
		$data=$st->fetchAll();
		return $data;
	}
	function get_rem_cars()
	{
		global $PDO;
		$st=$PDO->prepare('SELECT cars.* from cars WHERE cars.id IN (
		SELECT DISTINCT(id) from cars,rentcar WHERE cars.id NOT IN 
		(SELECT car_id from rentcar WHERE status="not clear"))');
		$data=$st->execute();
		$data=$st->fetchAll();
		return $data;
	}
	function insert_vendor($vendor)
	{
		global $PDO;
		$st=$PDO->prepare('insert into vendor (name) values (?)');
		if($st->execute(array($vendor)))
		{
			return true;
		}
	}
	function insert_city($city)
	{
		global $PDO;
		$st=$PDO->prepare('insert into city (name) values (?)');
		if($st->execute(array($city)))
		{
			return true;
		}
	}
	function insert_model($vendor,$model)
	{
		global $PDO;
		$st=$PDO->prepare('insert into model (name,vendor) values (?, ?)');
		if($st->execute(array($model,$vendor)))
		{
			return true;
		}
	}
	function get_remaining_amount($car_id)
	{
		global $PDO;
		$st=$PDO->prepare('SELECT rentcar.rent-rentcar.payup as remaining from rentcar WHERE rentcar.car_id=? 
							AND rentcar.status="not clear"');	
		$data=$st->execute(array($car_id));
		$data=$st->fetch(PDO::FETCH_ASSOC);
		return $data['remaining'];
	}
	function get_model_by_id($id)
	{
		global $PDO;
		$st=$PDO->prepare('Select * from model where vendor=?');
		$data=$st->execute(array($id));
		$data=$st->fetchAll();
		return $data;
	}
	
	function insert_car($owner, $vendor, $model, $model_year, $reg_alias, $reg_no, $city ){
		global $PDO;
		$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$st=$PDO->prepare('insert into cars (owner,vendor,model,model_year,reg_alias,reg_no,reg_city) 
							values (?, ?, ?, ?, ?, ?, ?)');
		if($st->execute(array($owner, $vendor, $model, $model_year, $reg_alias, $reg_no, $city)))
		{
			return true;
		}
	}
	function get_cars()
	{
		global $PDO;
		$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$st=$PDO->prepare('SELECT cars.id,cars.reg_alias,cars.reg_no,cars.model_year,vendor.name as vendor,model.name as 							model ,owners.name as owner from cars, vendor, model, owners where 
							cars.vendor=vendor.id 
							AND cars.model=model.id 
							AND cars.owner=owners.id ');
		$data=$st->execute();
		$data=$st->fetchAll();
		return $data;
	}
	function row_count($table)
	{
		global $PDO;
		$st=$PDO->prepare('Select * from '.$table);
		$data=$st->execute();
		$data=$st->rowCount();
		return $data;
	}
	function rent_a_car($dateout,$customer,$car,$rent,$payup)
	{
		global $PDO;
		$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$st=$PDO->prepare('insert into rentcar (outtime,car_id,cust_id,rent,payup,status) 
							values (?, ?, ?, ?, ?, ?)');
		if($st->execute(array($dateout,$car,$customer,$rent,$payup,'not clear')))
		{
			return true;
		}
	}
	function get_cars_out()
	{
		global $PDO;
		$st=$PDO->prepare('SELECT rentcar.rent_id,rentcar.car_id, rentcar.cust_id, rentcar.outtime, cars.reg_alias,
				cars.reg_no,customers.name from rentcar,cars,customers where rentcar.car_id=cars.id 
				AND rentcar.status="not clear" AND rentcar.cust_id=customers.id');
		$data=$st->execute();
		$data=$st->fetchAll();
		return $data;
	}
	function return_a_car($car_id,$returntime,$damage,$damage_claim)
	{
		global $PDO;
		$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$st=$PDO->prepare('update rentcar set returntime=?, demage=?, damage_claim=?, status=? WHERE car_id=? AND status="not clear"');
		if($st->execute(array($returntime,$damage,$damage_claim,'clear',$car_id)))
		{
			return true;
		}
	}
	function count_rented_cars()
	{
		global $PDO;
		$st=$PDO->prepare('Select * from rentcar WHERE status="not clear"');
		$data=$st->execute();
		$data=$st->rowCount();
		return $data;
	}
?>