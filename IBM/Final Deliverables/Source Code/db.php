import ibm_db

public  function addToCart($usernme){
        if (isset($username) && isset($itemid)){
            $params = array(
                "username" => $username
              
            );
CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `username` (
  `username` int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `username`
--

INSERT INTO `user` (`username`) VALUES

ALTER TABLE `username`

  ADD PRIMARY KEY (`username`);
  ALTER TABLE `username`
  MODIFY `username` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;