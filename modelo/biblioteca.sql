INSERT INTO `biblioteca_2`.`provincia` (`nombre`) VALUES ('CHUBUT');
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('ESQUEL', '9200', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('RAWSON', '9200', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('TRELEW', '9200', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('GAIMAN', '9200', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('DOLAVON', '9200', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('COMODORO RIVADAVIA', '9200', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('PUERTO MADRYN', '9200', 1);

INSERT INTO `biblioteca_2`.`tipo_doc` (`nombre`) VALUES ('DNI');

INSERT INTO `biblioteca_2`.`pfisica` (`nombre`, `apellido`, `varon`, `fecha_nac`, `tipo_doc_id_tipo_doc`, `documento`) VALUES ('GABRIEL', 'FIGUEROA', '1', '1989-03-21', '1', '789456');

INSERT INTO `biblioteca_2`.`usuario` (`id_usuario`, `valido`, `usuario`, `password`, `admin`, `email`) VALUES ('1', '1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', 'admin@admin.com');

INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES (1, 'GENERALIDADES');
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('INFORMATICA', 'ABC', 1);



INSERT INTO `biblioteca_2`.`pjuridica` (`nombre`, `razon_social`, `cuit_cuil`) VALUES ('UNIVERSIDAD DEL CHUBUT', 'UDC-123', '123-123-123');

INSERT INTO `biblioteca_2`.`biblioteca` (`nombre`, `pjuridica_id_pjuridica`) VALUES ('BIBLIOTECA UDC', 1);



INSERT INTO `biblioteca_2`.`pjuridica` (`nombre`, `razon_social`, `cuit_cuil`) VALUES ('CENTRO DE CULTURA', 'CDC-123', '123-123-123');

INSERT INTO `biblioteca_2`.`biblioteca` (`nombre`, `pjuridica_id_pjuridica`) VALUES ('BIBLIOTECA VACCHINA', 2);




INSERT INTO `biblioteca_2`.`carrera` (`nombre`) VALUES ('TECNICATURA EN DESARROLLO DE SOFTWARE');
INSERT INTO `biblioteca_2`.`carrera` (`nombre`) VALUES ('REDES');
INSERT INTO `biblioteca_2`.`carrera` (`nombre`) VALUES ('ENFERMERIA');

