A.1. Find the skills of the user where email id of the user is 'test@mail.com'.
-> 	SELECT 
		`skills`.`name`
	FROM
		`users`,
		`skills`
	WHERE 
		`users`.`id` = `skills`.`user_id` AND 
		`users`.`email` = 'test@mail.com'

A.2. Find the name of all users who knows HTML.
-> 	SELECT 
		`users`.`name` 
	FROM
		`users`,
		`skills`
	WHERE 
		`users`.`id` = `skills`.`user_id` AND 
		`skills`.`name` = 'HTML'



B.1. What are the phones that 'Sunil Kumar' has?
-> 	SELECT 
		`products`.`name` AS `product_name`,
		`users`.`name` AS `user_name`
	FROM
		`users`,
		`products`,
		`userproduct`
	WHERE 
		`users`.`id` = `userproduct`.`user_id` AND 
		`products`.`id` = `userproduct`.`product_id` AND 
		`users`.`name` = 'Sunil Kumar'
 B.2. Find the name of the users whose phone is less that 50000 in price.
-> 	SELECT 
		`users`.`name` AS `user_name`
	FROM
		`users`,
		`products`,
		`userproduct`
	WHERE 
		`users`.`id` = `userproduct`.`user_id` AND 
		`products`.`id` = `userproduct`.`product_id` AND 
		`products`.`price` < 50000