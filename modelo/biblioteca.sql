INSERT INTO `biblioteca_2`.`provincia` (`nombre`) VALUES ('Chubut');
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('Esquel', '9200', 1);
INSERT INTO `biblioteca_2`.`persona` (`domicilio_legal`, `domicilio_postal`) VALUES ('dom legal', 'dom postal');
INSERT INTO `biblioteca_2`.`tipo_doc` (`nombre`) VALUES ('dni');
INSERT INTO `biblioteca_2`.`pfisica` (`nombre`, `tipo_doc_id_tipo_doc`, `documento`, `persona_id_persona`) VALUES ('gabriel', 1, '123456', 1);
INSERT INTO `biblioteca_2`.`usuario` (`id_usuario`, `usuario`, `password`, `admin`) VALUES (1, 'kirardigo', '123', 1);

INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES (1, 'Generalidades');
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('informatica', 'abc', 1);

INSERT INTO `biblioteca_2`.`persona` (`domicilio_legal`, `domicilio_postal`) VALUES ('dom legal2', 'dom postal2');

INSERT INTO `biblioteca_2`.`pjuridica` (`razon_social`, `persona_id_persona`) VALUES ('prestar libros', 2);

INSERT INTO `biblioteca_2`.`biblioteca` (`nombre`, `pjuridica_id_pjuridica`) VALUES ('vacchina', 1);