

CREATE TABLE `acudiente` (
  `id_acud` int(11) NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `nom_acu` varchar(50) NOT NULL,
  `apel_acu` varchar(50) NOT NULL,
  `parentesco` char(1) NOT NULL,
  `dir_acu` varchar(120) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_ciu` int(11) NOT NULL,
  `tel_acu` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  PRIMARY KEY (`id_acud`),
  KEY `REL_TIP_ACU` (`tipo_doc`),
  KEY `REL_PAIS_ACU` (`id_pais`),
  KEY `REL_CIU_ACU` (`id_ciu`),
  KEY `REL_ESTUD_ACU` (`id_est`),
  CONSTRAINT `REL_CIU_ACU` FOREIGN KEY (`id_ciu`) REFERENCES `ciudad` (`id_ciu`),
  CONSTRAINT `REL_ESTUD_ACU` FOREIGN KEY (`id_est`) REFERENCES `estudiantes` (`id_est`),
  CONSTRAINT `REL_PAIS_ACU` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`),
  CONSTRAINT `REL_TIP_ACU` FOREIGN KEY (`tipo_doc`) REFERENCES `tipodoc` (`tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO acudiente VALUES("1","2","Leydi Viviana","Guzman Cortez","M","Manzana 3 Casa 14 B/Dimante","1","11","2147483647","1");





CREATE TABLE `ano_academico` (
  `id_ano_acad` int(11) NOT NULL,
  `nom_ano_acad` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ano_acad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO ano_academico VALUES("1","2021");
INSERT INTO ano_academico VALUES("2","2022");
INSERT INTO ano_academico VALUES("3","2023");
INSERT INTO ano_academico VALUES("4","2024");





CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `nom_area` varchar(50) NOT NULL,
  `est_area` char(1) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO areas VALUES("1","HUMANIDADES","4");
INSERT INTO areas VALUES("2","CIENCIAS NATURALES Y AMBIENTAL","4");
INSERT INTO areas VALUES("3","CIENCIAS POLITICAS Y ECONOMICAS","4");
INSERT INTO areas VALUES("4","MATEMATICAS","4");
INSERT INTO areas VALUES("5","EDUCACION RELIGIOSA","4");
INSERT INTO areas VALUES("6","EDUCACION ETICA Y VALORES ","4");
INSERT INTO areas VALUES("7","EDUCACION ARTISTICA","4");
INSERT INTO areas VALUES("8","EDU.FISICA RECREACION Y DEPORTES","4");
INSERT INTO areas VALUES("9","TECNOLOGIA E INFORMATICA","4");
INSERT INTO areas VALUES("10","FUNDAMENTACION","4");
INSERT INTO areas VALUES("11","FILOSOFIA ","4");





CREATE TABLE `asignaturas` (
  `id_asig` int(11) NOT NULL,
  `nom_asig` varchar(25) NOT NULL,
  `int_horaria` int(11) NOT NULL,
  `est_asig` char(1) NOT NULL,
  `id_area` int(11) NOT NULL,
  PRIMARY KEY (`id_asig`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO asignaturas VALUES("1","Español","2","4","1");
INSERT INTO asignaturas VALUES("2","Ingles","2","4","1");
INSERT INTO asignaturas VALUES("3","Quimica","2","4","2");
INSERT INTO asignaturas VALUES("4","Fisica","2","4","2");
INSERT INTO asignaturas VALUES("5","Ciencias Politicas ","2","4","3");
INSERT INTO asignaturas VALUES("6","Sociales","2","4","3");
INSERT INTO asignaturas VALUES("7","Filosofia","2","4","3");
INSERT INTO asignaturas VALUES("8","Trigonometria","2","4","4");
INSERT INTO asignaturas VALUES("9","Estadisticas","2","4","4");
INSERT INTO asignaturas VALUES("10","Religion","2","4","5");
INSERT INTO asignaturas VALUES("11","Etica","2","4","6");
INSERT INTO asignaturas VALUES("12","Artistica","2","3","7");
INSERT INTO asignaturas VALUES("13","Edu. Fisica","2","4","8");
INSERT INTO asignaturas VALUES("14","Informatica","2","4","9");
INSERT INTO asignaturas VALUES("15","Pedagogia","2","4","10");
INSERT INTO asignaturas VALUES("16","PPI","2","4","10");
INSERT INTO asignaturas VALUES("17","Comportamiento","2","4","11");





CREATE TABLE `ciudad` (
  `id_ciu` int(11) NOT NULL,
  `nom_ciu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ciu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO ciudad VALUES("1","Girardot");
INSERT INTO ciudad VALUES("2","Bogota");
INSERT INTO ciudad VALUES("3","Medellin");
INSERT INTO ciudad VALUES("4","Cali");
INSERT INTO ciudad VALUES("5","Ibague");
INSERT INTO ciudad VALUES("6","Santa Marta");
INSERT INTO ciudad VALUES("7","Villavicencio");
INSERT INTO ciudad VALUES("8","Nariño");
INSERT INTO ciudad VALUES("9","Pasto");
INSERT INTO ciudad VALUES("10","Armenia");
INSERT INTO ciudad VALUES("11","Barranquilla");





CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nom_curso` varchar(50) NOT NULL,
  `id_ano_acad` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `REL_ANOC_CURSO` (`id_ano_acad`),
  CONSTRAINT `REL_ANOC_CURSO` FOREIGN KEY (`id_ano_acad`) REFERENCES `ano_academico` (`id_ano_acad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO cursos VALUES("1","1102","1","1102");
INSERT INTO cursos VALUES("2","1101","2","1101");





CREATE TABLE `docentes` (
  `id_doc` varchar(10) NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `nom_doc` varchar(50) NOT NULL,
  `ap_doc` varchar(50) NOT NULL,
  `gen_doc` varchar(20) NOT NULL,
  `direc_doc` varchar(50) NOT NULL,
  `ed_doc` int(11) NOT NULL,
  `tel_doc` varchar(25) NOT NULL,
  `emdoc` varchar(50) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_ciu` int(11) NOT NULL,
  `id_asig` int(11) NOT NULL,
  PRIMARY KEY (`id_doc`),
  KEY `REL_TIPDOC_DOCENTE` (`tipo_doc`),
  KEY `REL_AREA_DOCENTE` (`id_area`),
  KEY `REL_PAIS_DOCENTE` (`id_pais`),
  KEY `REL_CIUDAD_DOCENTE` (`id_ciu`),
  KEY `REL_ASIG_DOCENTE` (`id_asig`),
  CONSTRAINT `REL_AREA_DOCENTE` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`),
  CONSTRAINT `REL_ASIG_DOCENTE` FOREIGN KEY (`id_asig`) REFERENCES `asignaturas` (`id_asig`),
  CONSTRAINT `REL_CIUDAD_DOCENTE` FOREIGN KEY (`id_ciu`) REFERENCES `ciudad` (`id_ciu`),
  CONSTRAINT `REL_PAIS_DOCENTE` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`),
  CONSTRAINT `REL_TIPDOC_DOCENTE` FOREIGN KEY (`tipo_doc`) REFERENCES `tipodoc` (`tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO docentes VALUES("1","2","Martha Liliana","Alonso","F","Carrera12a 64B","45","+57 315 4738507","marthalilianaalonso39@gmail.com","1","1","1","1");
INSERT INTO docentes VALUES("2","2","Ana ","Beatriz Vanegas","F","Carrera12a 64B","40","+57 322 3239940","teacheranabeatrizvanegas@gmail.com","1","1","1","2");





CREATE TABLE `estudiantes` (
  `id_est` int(11) NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `nom_est` varchar(50) NOT NULL,
  `ape_est` varchar(50) NOT NULL,
  `ed_est` int(11) NOT NULL,
  `fecnac_est` datetime NOT NULL,
  `gen_est` varchar(20) NOT NULL,
  `dir_est` varchar(40) NOT NULL,
  `tel_est` int(11) NOT NULL,
  `em_est` varchar(60) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_ciu` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`id_est`),
  KEY `REL_TIPDOC_EST` (`tipo_doc`),
  KEY `REL_PAIS_EST` (`id_pais`),
  KEY `REL_CIU_EST` (`id_ciu`),
  KEY `REL_CURSO_ESTUDIANTE` (`id_curso`),
  CONSTRAINT `REL_CIU_EST` FOREIGN KEY (`id_ciu`) REFERENCES `ciudad` (`id_ciu`),
  CONSTRAINT `REL_CURSO_ESTUDIANTE` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`),
  CONSTRAINT `REL_PAIS_EST` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`),
  CONSTRAINT `REL_TIPDOC_EST` FOREIGN KEY (`tipo_doc`) REFERENCES `tipodoc` (`tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO estudiantes VALUES("1","1","Keiner Santiago","Guerrero Guzman","15","2005-09-22 16:21:50","Masculino","Mnazana 3 casa 14 B/Diamante","314226056","Keinersantiag@gmail.com","1","1","1");





CREATE TABLE `logros` (
  `id_logro` int(11) NOT NULL,
  `nom_logro` varchar(120) NOT NULL,
  `per_logro` int(11) NOT NULL,
  `id_ano_esc` int(11) NOT NULL,
  PRIMARY KEY (`id_logro`),
  KEY `REL_PER_LOGRO` (`per_logro`),
  KEY `REL_ANOC_LOGRO` (`id_ano_esc`),
  CONSTRAINT `REL_ANOC_LOGRO` FOREIGN KEY (`id_ano_esc`) REFERENCES `ano_academico` (`id_ano_acad`),
  CONSTRAINT `REL_PER_LOGRO` FOREIGN KEY (`per_logro`) REFERENCES `periodo` (`id_per_aca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO logros VALUES("1","El estudiante debe haber sacado mas de 35 en el puntaje de la evaluacion","1","1");





CREATE TABLE `matriculas` (
  `id_matri` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `id_ano_acad` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_acud` int(11) NOT NULL,
  PRIMARY KEY (`id_matri`),
  KEY `REL_EST_MATRICULA` (`id_est`),
  KEY `REL_ANOC_MATRICULA` (`id_ano_acad`),
  KEY `REL_CURSO_MATRI` (`id_curso`),
  KEY `REL_ACU_MATRI` (`id_acud`),
  CONSTRAINT `REL_ACU_MATRI` FOREIGN KEY (`id_acud`) REFERENCES `acudiente` (`id_acud`),
  CONSTRAINT `REL_ANOC_MATRICULA` FOREIGN KEY (`id_ano_acad`) REFERENCES `ano_academico` (`id_ano_acad`),
  CONSTRAINT `REL_CURSO_MATRI` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`),
  CONSTRAINT `REL_EST_MATRICULA` FOREIGN KEY (`id_est`) REFERENCES `estudiantes` (`id_est`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO matriculas VALUES("1","1","1","1","1");





CREATE TABLE `notas` (
  `id_per_aca` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `id_asig` int(11) NOT NULL,
  `v_nota` float(10,0) NOT NULL,
  `id_notas` int(11) NOT NULL,
  `id_logro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_notas`),
  KEY `REL_ACA_NOTA` (`id_per_aca`),
  KEY `REL_ESTUD_NOTA` (`id_est`),
  KEY `REL_ASIG_NOTAS` (`id_asig`),
  KEY `REL_LOG_NOTA` (`id_logro`),
  CONSTRAINT `REL_ACA_NOTA` FOREIGN KEY (`id_per_aca`) REFERENCES `periodo` (`id_per_aca`),
  CONSTRAINT `REL_ASIG_NOTAS` FOREIGN KEY (`id_asig`) REFERENCES `asignaturas` (`id_asig`),
  CONSTRAINT `REL_ESTUD_NOTA` FOREIGN KEY (`id_est`) REFERENCES `estudiantes` (`id_est`),
  CONSTRAINT `REL_LOG_NOTA` FOREIGN KEY (`id_logro`) REFERENCES `logros` (`id_logro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO notas VALUES("1","1","1","50","1","1");





CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nom_pais` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO pais VALUES("1","Colombia");
INSERT INTO pais VALUES("2","Venezuela");
INSERT INTO pais VALUES("3","Chile");
INSERT INTO pais VALUES("4","Argentina");
INSERT INTO pais VALUES("5","Brasil");
INSERT INTO pais VALUES("6","Ecuador");
INSERT INTO pais VALUES("7","Bolivia");
INSERT INTO pais VALUES("8","Peru");
INSERT INTO pais VALUES("9","Paraguay");
INSERT INTO pais VALUES("10","Uruguay");





CREATE TABLE `periodo` (
  `id_per_aca` int(11) NOT NULL,
  `nom_per` varchar(50) NOT NULL,
  PRIMARY KEY (`id_per_aca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO periodo VALUES("1","Primer Periodo");
INSERT INTO periodo VALUES("2","Segundo Periodo");
INSERT INTO periodo VALUES("3","Tercer Periodo");
INSERT INTO periodo VALUES("4","Cuarto Periodo");





CREATE TABLE `tipodoc` (
  `tipo_doc` int(11) NOT NULL,
  `nom_doc` varchar(25) NOT NULL,
  PRIMARY KEY (`tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO tipodoc VALUES("1","Tarjeta de Identidad");
INSERT INTO tipodoc VALUES("2","Cedula de Cuidadania");





CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nom_usu` varchar(50) NOT NULL,
  `apel_usu` varchar(50) NOT NULL,
  `pass_usu` varchar(10) NOT NULL,
  `per_usu` int(15) NOT NULL,
  `est_usu` char(1) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO usuarios VALUES("1","demo","Guerrero Guzman","demo","1","A");



