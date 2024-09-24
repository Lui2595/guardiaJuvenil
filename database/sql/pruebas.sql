INSERT INTO `pruebas` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (NULL, 'Medidas', 'Se tomarán medida del elemento ', NULL, NULL), (NULL, '100 mts planos', 'Tiempo en el que se recorren 100 mts planos', NULL, NULL) , (NULL, 'Capacidad Fisisca', 'Se mediran valores maximos en ciertos ejecrcicios', NULL, NULL);

INSERT INTO `pruebas_datos` (`id`, `pruebas_id`, `nombre`, `descripcion`, `medida`, `created_at`, `updated_at`) VALUES (NULL, '2', 'Tiempo que tarda en recorrer el elemento 100 m planos', 'El elemento deberá de tomar posición y se le tomara el tiempo del silbatazo hasta recorrer 100m', 'segundos y milisegundos ', NULL, NULL) ,
(NULL, '1', 'Medida de la altura del elemento', 'Se tomara la altura del elemento', 'centimetros ', NULL, NULL) ,
(NULL, '1', 'Medida de la cintura', 'Se tomara la medida de la cintura del elemento', 'centimetros ', NULL, NULL),
(NULL, '1', 'Medida de hombres/busto', 'Se tomara la medida de hombros/busto del elemento', 'centimetros ', NULL, NULL),
(NULL, '1', 'Peso', 'Se tomara el peso del elemento', 'kilogramos ', NULL, NULL),
(NULL, '1', 'Porcentaje de grasa', 'Se tomara el porcentaje de grasa del elemento', 'porcentaje ', NULL, NULL),
(NULL, '1', 'Porcentaje de masa muscular', 'Se tomara el porcentaje de masa muscular del elemento', 'porcentaje ', NULL, NULL),
(NULL, '1', 'Indice de Grasa Viceral', 'Se tomara el indice de grasa viceral del elemento', 'indice ', NULL, NULL),
(NULL, '1', 'Edad Metabolica', 'Se tomara la edad metabolica del elemento', 'años ', NULL, NULL),
(NULL, '1', 'Calorias de mantenimiento', 'Se tomara la calorias de mantenimiento del elemento', 'calorias ', NULL, NULL),
(NULL, '3', 'Fuerza en brazos', 'Se tomara la fuerza en brazos del elemento haciendo lagartijas durante un minuto', 'cantidad por minutos ', NULL, NULL),
(NULL, '3', 'Fuerza en piernas', 'Se tomara la fuerza en piernas del elemento haciendo sentadillas durante un minuto', 'cantidad por minutos ', NULL, NULL),
(NULL, '3', 'Fuerza en abdominales', 'Se tomara la fuerza en abdominales del elemento haciendo abdominales durante un minuto', 'cantidad por minutos ', NULL, NULL);

