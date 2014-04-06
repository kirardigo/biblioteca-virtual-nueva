INSERT INTO `biblioteca_2`.`provincia` (`nombre`) VALUES ('CHUBUT');
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('ESQUEL', '9200', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('RAWSON', '9103', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('TRELEW', '9103', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('GAIMAN', '9105', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('DOLAVON', '9107', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('COMODORO RIVADAVIA', '9000', 1);
INSERT INTO `biblioteca_2`.`localidad` (`nombre`, `cod_postal`, `provincia_id_provincia`) VALUES ('PUERTO MADRYN', '9120', 1);

INSERT INTO `biblioteca_2`.`tipo_doc` (`nombre`) VALUES ('DNI');

INSERT INTO `biblioteca_2`.`pfisica` (`nombre`, `apellido`, `varon`, `fecha_nac`, `tipo_doc_id_tipo_doc`, `documento`) VALUES ('GABRIEL', 'FIGUEROA', '1', '1989-03-21', '1', '789456');

INSERT INTO `biblioteca_2`.`usuario` (`id_usuario`, `valido`, `usuario`, `password`, `admin`, `email`) VALUES ('1', '1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', 'admin@admin.com');

INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('R', 'REFERENCIAS');
INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('0', 'GENERALIDADES');
INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('1', 'FILOSOFIA');
INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('2', 'RELIGION');
INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('3', 'CIENCIAS SOCIALES Y DISCIPLINAS AFINES');
INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('3 7', 'EDUCACION');
INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('5', 'CIENCIAS PURAS');
INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('6', 'CIENCIAS APLICADAS');
INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('7', 'ARTE Y DEPORTE');
INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('8', 'LINGUISTICA Y LITERATURA');
INSERT INTO `biblioteca_2`.`contenido` (`numero_contenido`, `nombre`) VALUES ('9', 'GEOGRAFIA, BIOGRAFIAS E HISTORIA');


INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('DICCIONARIO', 'R', 1);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('ENCICLOPEDIA', 'RE', 1);

INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('FILOSOFIA', '', 3);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('PSICOLOGIA', '', 3);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('LOGICA', '', 3);

INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('RELIGION', '', 4);

INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('CIENCIAS SOCIALES', '', 5);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('SOCIOLOGIA', '', 5);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('POLITICA', '', 5);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('ECONOMIA Y TRABAJO', '', 5);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('DERECHO', '616', 5);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('ADMINISTRACION PUBLICA', '', 5);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('FUERZAS ARMADAS', '', 5);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('TRABAJO SOCIAL', '', 5);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('ETNOLOGIA- FOLKLORE-USOS Y COSTUMBRES-VIDA SOCIAL', '', 5);

INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('EDUCACION. ENSEÑANZA', '', 6);

INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('MATEMATICAS', '', 7);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('ASTRONOMIA-GEODESIA', '', 7);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('FISICA', '', 7);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('QUIMICA', '', 7);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('GEOLOGIA Y CIENCIAS AFINES', '', 7);

INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('MEDICINA', '', 8);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('VETERINARIA', '', 8);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('INGENIERIA', '', 8);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('AGRICULTURA, GANADERIA Y PESCA', '', 8);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('COMUNICACIONES', '', 8);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('GESTION DE EMPRESAS, DE PRODUCTOS Y SERVICIOS', '', 8);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('INDUSTRIA Y TECNOLOGIA', '', 8);

INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('ARTE', '', 9);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('DEPORTES', '', 9);

INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('LINGUISTICA. FILOLOGIA', '', 10);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('LITERATURA', '', 10);

INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('GEOGRAFIA', '', 11);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('BIOGRAFIAS', '', 11);
INSERT INTO `biblioteca_2`.`subcontenido` (`nombre`, `numero_subcontenido`, `contenido_id_contenido`) VALUES ('HISTORIA', '', 11);





INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('COMPUTACION Y SUS APLICACIONES', '681.3', 28);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('TELECOMUNICACIONES', '621.3/9', 24);

INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('EMBRIOLOGIA', '611.013', 22);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('ANATOMIA HUMANA', '611', 22);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('NUTRICION', '612.39', 22);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('NEUROLOGIA', '616.8', 22);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('FARMACOLOGIA', '615', 22);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('GINECOLOGIA Y OBSTRETICIA', '618', 22);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('ORTOPEDIA', '617', 22);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('PATOLOGIA', '616', 22);


INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('ALGEBRA', '512', 17);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('ANALISIS MATEMATICO', '517', 17);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('MATEMATICAS GENERALIDADES', '51', 17);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('ARITMETICA', '', 17);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('DICCIONARIO MEDICO', '511', 1);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('DICCIONARIO INFORMATICO', '', 1);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('DICCIONARIO IDIOMA', '', 1);
INSERT INTO `biblioteca_2`.`tema` (`nombre`, `numero_tema`, `subcontenido_id_subcontenido`) VALUES ('GERONTOLOGIA', '613.98', 22);





INSERT INTO `biblioteca_2`.`pjuridica` (`nombre`, `razon_social`, `cuit_cuil`) VALUES ('UNIVERSIDAD DEL CHUBUT', 'UDC-123', '123-123-123');

INSERT INTO `biblioteca_2`.`biblioteca` (`nombre`, `pjuridica_id_pjuridica`) VALUES ('BIBLIOTECA UDC', 1);



INSERT INTO `biblioteca_2`.`pjuridica` (`nombre`, `razon_social`, `cuit_cuil`) VALUES ('SECRETARIA DE CULTURA', 'CDC-123', '123-123-123');

INSERT INTO `biblioteca_2`.`biblioteca` (`nombre`, `pjuridica_id_pjuridica`) VALUES ('BIBLIOTECA VACCHINA', 2);




INSERT INTO `biblioteca_2`.`carrera` (`nombre`) VALUES ('DESARROLLO DE SOFTWARE');
INSERT INTO `biblioteca_2`.`carrera` (`nombre`) VALUES ('REDES y TELECOMUNICACIONES');
INSERT INTO `biblioteca_2`.`carrera` (`nombre`) VALUES ('ENFERMERIA');

