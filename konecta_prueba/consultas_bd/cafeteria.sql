


-- Base de datos: `cafeteria`

CREATE DATABASE cafeteria;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_prod`
--

CREATE TABLE `cafeteria`.`categoria_prod` (
  `id` int(11) NOT NULL,
  `nombre_cat` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(1) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria_prod`
--

INSERT INTO `cafeteria`.`categoria_prod` (`id`, `nombre_cat`, `estado`) VALUES
(1, 'Bebida lista', 'A'),
(2, 'Bebida preparada', 'A'),
(3, 'Pastelería', 'A'),
(4, 'Repostería', 'A'),
(5, 'Café', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `cafeteria`.`productos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `referencia` text COLLATE utf8_spanish2_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_prod`
--

CREATE TABLE `cafeteria`.`ventas_prod` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `cant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


--
-- Indices de la tabla `categoria_prod`
--
ALTER TABLE `cafeteria`.`categoria_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `cafeteria`.`productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas_prod`
--
ALTER TABLE `cafeteria`.`ventas_prod`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_prod`
--
ALTER TABLE `cafeteria`.`categoria_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `cafeteria`.`productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas_prod`
--
ALTER TABLE `cafeteria`.`ventas_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


