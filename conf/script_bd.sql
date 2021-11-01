CREATE TABLE `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `janeiro` double DEFAULT NULL,
  `fevereiro` double DEFAULT NULL,
  `marco` double DEFAULT NULL,
  `abril` double DEFAULT NULL,
  `maio` double DEFAULT NULL,
  `junho` double DEFAULT NULL,
  `julho` double DEFAULT NULL,
  `agosto` double DEFAULT NULL,
  `setembro` double DEFAULT NULL,
  `outubro` double DEFAULT NULL,
  `novembro` double DEFAULT NULL,
  `dezembro` double DEFAULT NULL,
  `fixo` double DEFAULT NULL,
  `datacontratacao` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO `ifc`.`vendas` (`nome`, `janeiro`, `fevereiro`, `marco`, `abril`, `maio`, `junho`, `julho`, `agosto`, `setembro`, `outubro`, `novembro`, `dezembro`, `fixo`, `datacontratacao`) VALUES ('murilo', '2.000', '4.000', '6.000', '8.000', '5.000', '2.000', '11.000', '12.000', '8.000', '9.000', '20.000', '19.000', '2.000', '12/06/2000');
INSERT INTO `ifc`.`vendas` (`nome`, `janeiro`, `fevereiro`, `marco`, `abril`, `maio`, `junho`, `julho`, `agosto`, `setembro`, `outubro`, `novembro`, `dezembro`, `fixo`, `datacontratacao`) VALUES ('guilherme', '7.000', '5.000', '600', '10.000', '1.000', '15.000', '12.000', '7.000', '4.000', '3.000', '7.000', '9.000', '2.550', '13/04/2004');
INSERT INTO `ifc`.`vendas` (`nome`, `janeiro`, `fevereiro`, `marco`, `abril`, `maio`, `junho`, `julho`, `agosto`, `setembro`, `outubro`, `novembro`, `dezembro`, `fixo`, `datacontratacao`) VALUES ('rodrigo', '5.000', '2.000', '5.000', '6.000', '7.000', '10.000', '12.000', '13.000', '15.000', '16.000', '8.000', '2.000', '3.000', '15/08/2018');
INSERT INTO `ifc`.`vendas` (`nome`, `janeiro`, `fevereiro`, `marco`, `abril`, `maio`, `junho`, `julho`, `agosto`, `setembro`, `outubro`, `novembro`, `dezembro`, `fixo`, `datacontratacao`) VALUES ('pedro', '10.000', '4.000', '2.000', '6.000', '8.000', '10.000', '12.000', '19.000', '18.000', '17.000', '7.000', '8.000', '5.000', '16/05/2010');
INSERT INTO `ifc`.`vendas` (`nome`, `janeiro`, `fevereiro`, `marco`, `abril`, `maio`, `junho`, `julho`, `agosto`, `setembro`, `outubro`, `novembro`, `dezembro`, `fixo`, `datacontratacao`) VALUES ('ana', '12.000', '1.000', '4.000', '6.000', '8.000', '10.000', '12.000', '15.000', '16.000', '18.000', '4.000', '5.000', '11.000', '14/07/2020');