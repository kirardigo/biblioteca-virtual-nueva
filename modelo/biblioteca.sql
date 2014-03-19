INSERT INTO `biblioteca_2`.`provincia` (`nombre`) VALUES ('Chubut');
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('Esquel', '9200', 1);

INSERT INTO `biblioteca_2`.`tipo_doc` (`nombre`) VALUES ('dni');

INSERT INTO `biblioteca_2`.`pfisica` (`nombre`, `apellido`, `tipo_doc_id_tipo_doc`, `documento`) VALUES ('gabriel', 'figueroa', 1, '123456');

INSERT INTO `biblioteca_2`.`usuario` (`id_usuario`, `usuario`, `password`, `admin`) VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);

INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES (1, 'Generalidades');
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('informatica', 'abc', 1);



INSERT INTO `biblioteca_2`.`pjuridica` (`razon_social`) VALUES ('prestar libros');

INSERT INTO `biblioteca_2`.`biblioteca` (`nombre`, `pjuridica_id_pjuridica`) VALUES ('udc', 1);
INSERT INTO `biblioteca_2`.`carrera` (`nombre`) VALUES ('software');



