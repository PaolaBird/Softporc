-- Softpig Database Schema
-- Versión 1.0

-- 2018-II, Juan Fernando Romero Ortega. 

-- ESTE SOFTWARE ES DESARROLLADO E IMPLEMENTADO CON EL FIN DE ALMACENAR LOS DATOS DE LA EMPRESA QUE LO CONTRATE; LA CUAL IMPONE SUS DERECHOS SOBRE ÉL.

DROP DATABASE IF EXISTS SOFTPIG;
CREATE DATABASE IF NOT EXISTS SOFTPIG;
USE SOFTPIG;

/******************************************************** TABLAS CATALOGO ************************************************************************************/

--
-- Estructura de tabla para la tabla `PigStageCat`
-- 

CREATE TABLE PigStageCat (
  ID_PIG_STAGE TINYINT NOT NULL AUTO_INCREMENT,
  pigStage char(10) NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_PIG_STAGE)
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `examCat`
--

CREATE TABLE ExamCat (
  ID_EXAM_CAT TINYINT NOT NULL AUTO_INCREMENT,
  examName varchar(15) NOT NULL,
  examDescription TEXT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_EXAM_CAT)
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `fasecrecimiento`
--

CREATE TABLE GrowthPhaseCat (
  ID_GROWTH_PHASE TINYINT NOT NULL AUTO_INCREMENT,
  growthPhase VARCHAR(10) NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_GROWTH_PHASE)
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tipo_instalacion`
--

CREATE TABLE TypeInstalationCat (
  ID_TYPE_INSTALATION TINYINT NOT NULL AUTO_INCREMENT,
  typeInstalation varchar(10) NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_TYPE_INSTALATION),
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `instalacion`
--

CREATE TABLE InstalationCat (
  ID_INSTALATION TINYINT NOT NULL AUTO_INCREMENT,
  idTypeInstalation TINYINT  NOT NULL,
  name varchar(15) NOT NULL,
  capacity SMALLINT  NULL ,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
  PRIMARY KEY (ID_INSTALATION),
  FOREIGN KEY (idTypeInstalation) REFERENCES TypeInstalationCat(ID_TYPE_INSTALATION) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tipo_medicamento`
--

CREATE TABLE TypeMedicineCat (
  ID_TYPE_MEDICINE TINYINT NOT NULL AUTO_INCREMENT,
  typeMedicine varchar(50) NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_TYPE_MEDICINE)
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE MedicineCat (
  ID_MEDICINE TINYINT NOT NULL AUTO_INCREMENT,
  idTypeMedicine TINYINT  NOT NULL,
  name VARCHAR(50) NOT NULL,
  quantity SMALLINT NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_MEDICINE),
  FOREIGN KEY (idTypeMedicine) REFERENCES TypeMedicineCat(ID_TYPE_MEDICINE) ON DELETE RESTRICT ON UPDATE cas
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tipo de apareamiento`
--

CREATE TABLE MatingCat (
  ID_TYPE_MATING BIT NOT NULL,
  typeMating VARCHAR(13) NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_TYPE_MATING)
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE RaceCat (
  ID_RACE TINYINT  NOT NULL AUTO_INCREMENT,
  race varchar(50) NOT NULL,
  description text NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_RACE)
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE RoleCat (
  ID_ROLE BIT NOT NULL,
  role VARCHAR(50) NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_ROLE)
)ENGINE=InnoDB CHARSET=utf8;

--
-- Estructura de tabla para la tabla `tipo_articulo`
--

CREATE TABLE TypeArticleCat (
  ID_TYPE_ARTICLE TINYINT NOT NULL AUTO_INCREMENT,
  typeArticle VARCHAR(25) NOT NULL,
  description TEXT,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_TYPE_ARTICLE)
)ENGINE=InnoDB CHARSET=utf8;

/**************************************************************** TABLAS DE DATOS **************************************************************************/

--
-- Estructura de tabla para la tabla `empleados`
--
 
CREATE TABLE Person (
  DOCUMENT CHAR(10) NOT NULL,
  firstName varchar(50) NOT NULL,
  secondName varchar(50) NOT NULL,
  fatherLastName varchar(50) NOT NULL,
  motherLastName varchar(50) NOT NULL,
  sex BIT NOT NULL,
  email varchar(100) NOT NULL,
  phone char(7) NULL DEFAULT 'Unkown',
  cel_phone char (10) NOT NULL DEFAULT 'Unkown',
  noEmployee SMALLINT AUTO_INCREMENT NOT NULL UNIQUE,
  idRole BIT  NOT NULL,
  password varchar(10) NOT NULL,
  idInstalation TINYINT  NOT NULL DEFAULT 0 COMMENT 'Desconocida',
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (DOCUMENT),
  FOREIGN KEY (idRole) 		  REFERENCES RoleCat(ID_ROLE) 				ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (idInstalation) REFERENCES InstalationCat(ID_INSTALATION) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `alarma`
--

CREATE TABLE Alarm(
  NO_EMPLOYEE SMALLINT NOT NULL,
  issue varchar(30) NOT NULL,
  DATE_TIME TIMESTAMP(0) NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (NO_EMPLOYEE, DATE_TIME),
  FOREIGN KEY (NO_EMPLOYEE) REFERENCES Person (noEmployee) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE Article (
  ID_ARTICLE TINYINT NOT NULL AUTO_INCREMENT,
  idType TINYINT  NOT NULL ,
  name varchar(50) NOT NULL,
  quantity SMALLINT NOT NULL,
  idInstalation TINYINT NOT NULL DEFAULT 4 COMMENT 'Id 4 es de Articulos',
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_ARTICLE),
  FOREIGN KEY (idType) REFERENCES TypeArticleCat (ID_TYPE_ARTICLE) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (idInstalation) REFERENCES InstalationCat (ID_INSTALATION) ON DELETE RESTRICT ON UPDATE CASCADE
  )ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `porcino`
--

CREATE TABLE Pig (
  ID_PIG SMALLINT NOT NULL AUTO_INCREMENT,
  sex BIT  NOT NULL,
  wigth TINYINT NOT NULL,
  idRace TINYINT NOT NULL,
  idGrowthPhase TINYINT NOT NULL,
  idPigStage TINYINT NOT NULL,
  health BIT NOT NULL,
  idInstalation TINYINT NOT NULL DEFAULT 0 COMMENT 'Desconocida',
  birthDate DATE NOT NULL DEFAULT '0000-00-00' COMMENT 'Desconocida',
  acquisitionDate TIMESTAMP(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_PIG),
  FOREIGN KEY (idRace)        REFERENCES RaceCat (ID_RACE)                ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (idGrowthPhase) REFERENCES GrowthPhaseCat (ID_GROWTH_PHASE) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (idPigStage)    REFERENCES PigStageCat (ID_PIG_STAGE)       ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (idInstalation) REFERENCES InstalationCat (ID_INSTALATION)  ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB CHARSET=utf8;

-- ------------------------------------------------------
--
-- Estructura de tabla para la tabla `reproductor`
--

CREATE TABLE Male (
  ID_MALE SMALLINT NOT NULL AUTO_INCREMENT,
  physicalConformation text  NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_MALE),
  FOREIGN KEY (ID_MALE) REFERENCES Pig (ID_PIG) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `examen_reproductor`
--

CREATE TABLE MaleExam (
  ID_MALE SMALLINT NOT NULL,
  ID_EXAM TINYINT NOT NULL,
  EXAM_DATE TIMESTAMP(0) NOT NULL,
  examResult TEXT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_MALE, ID_EXAM, EXAM_DATE),
  FOREIGN KEY (ID_MALE) REFERENCES Male (ID_MALE)      ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (ID_EXAM) REFERENCES ExamCat (ID_EXAM_CAT)      ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `medicamento_porcino`
--

CREATE TABLE MedicinePig (
  ID_MEDICINE TINYINT NOT NULL,
  ID_PIG SMALLINT NOT NULL,
  DATE_TIME TIMESTAMP(0) NOT NULL,
  applied BIT NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_MEDICINE, ID_PIG, DATE_TIME),
  FOREIGN KEY (ID_MEDICINE) REFERENCES MedicineCat (ID_MEDICINE) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (ID_PIG)      REFERENCES Pig(ID_PIG)               ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `reproductora`
--

CREATE TABLE Female (
  ID_FEMALE SMALLINT NOT NULL,
  virgin BIT NOT NULL, -- es virgen
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_FEMALE),
  FOREIGN KEY (ID_FEMALE) REFERENCES Pig(ID_PIG) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `parto`
--

CREATE TABLE Birth (
  ID_FEMALE SMALLINT NOT NULL,
  idMale SMALLINT NOT NULL,
  DATE_BIRTH TIMESTAMP(0) NOT NULL,
  noBabies TINYINT NOT NULL,
  noMummy TINYINT NOT NULL,
  noDead TINYINT NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_FEMALE, DATE_BIRTH),
  FOREIGN KEY (ID_FEMALE) REFERENCES Female (ID_FEMALE) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (idMale)    REFERENCES Male (ID_MALE)     ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `periodo_celo`
--

CREATE TABLE PeriodHeat (
  ID_PERIOD_HEAT SMALLINT NOT NULL AUTO_INCREMENT,
  ID_FEMALE SMALLINT NOT NULL,
  idTypeMating BIT NOT NULL, 
  sincrony BIT  NOT NULL,
  DATE_START DATE NOT NULL,
  dateEnd DATE NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY(ID_PERIOD_HEAT, ID_FEMALE, DATE_START),
  FOREIGN KEY(ID_FEMALE)    REFERENCES Pig(ID_PIG)               ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY(idTypeMating) REFERENCES MatingCat(ID_TYPE_MATING) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB CHARSET=utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `periodo_gestacion`
--

CREATE TABLE PeriodGestation (
  ID_PERIOD_GESTATION SMALLINT NOT NULL AUTO_INCREMENT,
  ID_FEMALE SMALLINT NOT NULL,
  DATE_START DATE NOT NULL,
  lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (ID_PERIOD_GESTATION, ID_FEMALE, DATE_START),
  FOREIGN KEY (ID_FEMALE) REFERENCES  Female(ID_FEMALE) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB CHARSET=utf8;