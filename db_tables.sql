-- sql script to create product table

CREATE TABLE ProductRey
(


  prodId              INTEGER(4)         AUTO_INCREMENT,
  prodName            VARCHAR (30)       NOT NULL,
  prodPicNameSmall    VARCHAR (100)      NOT NULL,
  prodPicNameLarge    VARCHAR (100)      NOT NULL,
  prodDescripShort    VARCHAR (1000)    ,
  prodDescripLong     VARCHAR (3000)    ,
  prodPrice           DECIMAL (6,2)     NOT NULL,
  prodQuantity        INTEGER (4)       NOT NULL,
  CONSTRAINT          p_pid_pk          PRIMARY KEY (prodId)

);

INSERT INTO
ProductRey
(prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity)
VALUES
('Illustration 1', 'pic1.jpg', 'pic1.jpg', 'Print, copy, scan and fax', '6 month free trial of HP Instant Ink
WiFi / Apple AirPrint', 99.00, 35) -- VARCHAR IMMER IN SINGLE QUOTES

('Illustration 2', 'pic2.jpg', 'pic2.jpg', 'Print, copy, scan and fax', '6 month free trial of HP Instant Ink
WiFi / Apple AirPrint', 99.00, 35)

('Illustration 3', 'pic3.jpg', 'pic3.jpg', 'Print, copy, scan and fax', '6 month free trial of HP Instant Ink
WiFi / Apple AirPrint', 99.00, 35)

('Illustration 4', 'pic4.jpg', 'pic4.jpg', 'Print, copy, scan and fax', '6 month free trial of HP Instant Ink
WiFi / Apple AirPrint', 99.00, 35)

CREATE TABLE OrdersRey
(
  orderNum INTEGER(4) AUTO_INCREMENT,
  userId INTEGER(4) NOT NULL,
  orderDateTime DATETIME NOT NULL,
  orderTotal DECIMAL(8, 2),
  orderStatus VARCHAR(50),
          
        CONSTRAINT o_ono_pkk PRIMARY KEY (orderNum),
        CONSTRAINT o_uid_fkk FOREIGN KEY (userId) REFERENCES UserRey(userId)

);

CREATE TABLE Order_Line
(
  orderLineId INTEGER(4) AUTO_INCREMENT,
  orderNo     INTEGER(4) NOT NULL,
  prodId      INTEGER(4) NOT NULL,
  quantityOrdered INTEGER(3) NOT NULL,
  subTotal DECIMAL(8,2),


 CONSTRAINT ol_olid_pk PRIMARY KEY (orderLineId), 
 CONSTRAINT ol_ono_fk FOREIGN KEY (orderNo) REFERENCES Orders(orderNo),
 CONSTRAINT ol_pid_fk FOREIGN KEY (prodId) REFERENCES Product(prodId)
);
