-- Criando o banco de dados se nao existir
CREATE DATABASE IF NOT EXISTS comentarios_resposta;
USE comentarios_resposta;

-- Criando a tabela artigos se nao existir
CREATE TABLE `artigos` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(120) NOT NULL COLLATE 'latin1_swedish_ci',
	`text_post` TEXT(65535) NOT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=5
;

-- Criando a tabela comments se nao existir
CREATE TABLE `comments` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`id_post` INT(11) NOT NULL,
	`comment` TEXT(65535) NOT NULL COLLATE 'latin1_swedish_ci',
	`name` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`email` VARCHAR(100) NOT NULL COLLATE 'latin1_swedish_ci',
	`date_time` DATETIME NOT NULL,
	`id_resp` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=17
;

-- Inserindo os dados na tabela 'artigos'
INSERT INTO artigos (id, title, comment, ) VALUES
(1, 'O Primeiro Título', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Dui ut ornare lectus sit amet. Volutpat lacus laoreet non curabitur gravida arcu ac. Praesent elementum facilisis leo vel fringilla est. Aliquam ut porttitor leo a diam. Consectetur lorem donec massa sapien faucibus. Pharetra diam sit amet nisl suscipit. Mauris pellentesque pulvinar pellentesque habitant morbi. Nunc faucibus a pellentesque sit amet. Sed sed risus pretium quam vulputate dignissim suspendisse. Nunc sed augue lacus viverra vitae congue. Et malesuada fames ac turpis egestas integer eget. Nunc congue nisi vitae suscipit tellus. Dapibus ultrices in iaculis nunc sed augue lacus viverra. Ornare arcu odio ut sem nulla pharetra diam sit. Nibh tellus molestie nunc non blandit massa enim nec dui. Ut placerat orci nulla pellentesque dignissim enim. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Nunc vel risus commodo viverra maecenas.</p>

<p>Arcu vitae elementum curabitur vitae nunc sed velit. Velit laoreet id donec ultrices tincidunt arcu. Integer feugiat scelerisque varius morbi enim nunc faucibus. Aliquet lectus proin nibh nisl condimentum id venenatis a. Nisl pretium fusce id velit ut tortor. Ac turpis egestas sed tempus urna et. Proin sed libero enim sed faucibus. Tortor vitae purus faucibus ornare suspendisse sed nisi. Urna porttitor rhoncus dolor purus non enim. Faucibus scelerisque eleifend donec pretium vulputate. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Purus faucibus ornare suspendisse sed nisi. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Adipiscing bibendum est ultricies integer quis. Eu ultrices vitae auctor eu augue ut lectus arcu bibendum. Rhoncus urna neque viverra justo nec ultrices dui. Cursus turpis massa tincidunt dui.</p>

<p>Dui nunc mattis enim ut tellus elementum sagittis vitae et. Quam vulputate dignissim suspendisse in est ante in. Adipiscing elit ut aliquam purus sit amet. Arcu ac tortor dignissim convallis. Bibendum enim facilisis gravida neque. Nibh nisl condimentum id venenatis a condimentum vitae. Et egestas quis ipsum suspendisse ultrices. Amet est placerat in egestas erat imperdiet sed euismod. Risus at ultrices mi tempus. Ac felis donec et odio pellentesque diam volutpat commodo.</p>

<p>Lorem mollis aliquam ut porttitor. Odio ut enim blandit volutpat. Nisl nisi scelerisque eu ultrices vitae auctor eu augue. Sapien pellentesque habitant morbi tristique senectus et. Enim praesent elementum facilisis leo vel fringilla est ullamcorper eget. Odio tempor orci dapibus ultrices in iaculis nunc.</p>'),
(2, 'O Segundo Título', '<p>Quis varius quam quisque id diam vel quam elementum pulvinar. Non arcu risus quis varius quam quisque. Et sollicitudin ac orci phasellus egestas tellus rutrum tellus. Libero enim sed faucibus turpis. Tortor at auctor urna nunc. Ac orci phasellus egestas tellus rutrum tellus pellentesque eu. Tempus urna et pharetra pharetra massa massa ultricies mi quis. Aliquam ultrices sagittis orci a. At volutpat diam ut venenatis. Consectetur lorem donec massa sapien.</p>

<p>Posuere ac ut consequat semper viverra. Nibh ipsum consequat nisl vel pretium lectus quam id. Semper risus in hendrerit gravida rutrum quisque. Id nibh tortor id aliquet lectus proin nibh nisl. Donec et odio pellentesque diam volutpat. Eu tincidunt tortor aliquam nulla. Pellentesque id nibh tortor id aliquet lectus proin. At lectus urna duis convallis. Placerat duis ultricies lacus sed turpis tincidunt. Curabitur vitae nunc sed velit dignissim sodales ut. Quis blandit turpis cursus in hac habitasse platea dictumst quisque. Nisl pretium fusce id velit. Placerat in egestas erat imperdiet sed. Scelerisque eu ultrices vitae auctor eu. Id leo in vitae turpis massa sed elementum tempus egestas. Mattis pellentesque id nibh tortor. Diam maecenas sed enim ut sem.</p>'),
(3, 'O Terceiro Título', '<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Hac habitasse platea dictumst quisque. Ultricies mi quis hendrerit dolor magna eget est lorem. Lacinia at quis risus sed vulputate odio. In massa tempor nec feugiat nisl pretium. Tincidunt nunc pulvinar sapien et ligula. Lobortis feugiat vivamus at augue. Non enim praesent elementum facilisis leo vel fringilla. Tincidunt praesent semper feugiat nibh sed. Pharetra et ultrices neque ornare. Tortor id aliquet lectus proin. Tempus egestas sed sed risus pretium quam vulputate dignissim. Vivamus at augue eget arcu. Purus viverra accumsan in nisl nisi scelerisque.</p>

<p>Sed elementum tempus egestas sed sed. Nisl tincidunt eget nullam non nisi. Non arcu risus quis varius quam quisque id diam. Ac turpis egestas maecenas pharetra. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Enim nunc faucibus a pellentesque sit amet porttitor eget. Nulla facilisi morbi tempus iaculis urna id volutpat lacus. Massa id neque aliquam vestibulum morbi blandit cursus risus. Libero enim sed faucibus turpis in. Bibendum est ultricies integer quis auctor elit sed. Faucibus et molestie ac feugiat. Tristique nulla aliquet enim tortor. Eget nunc scelerisque viverra mauris. Duis at tellus at urna condimentum mattis pellentesque id nibh. Sit amet mattis vulputate enim. </p>

<p>Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum. Diam vel quam elementum pulvinar etiam. Eget mauris pharetra et ultrices neque ornare aenean euismod. Pellentesque dignissim enim sit amet venenatis urna cursus eget nunc. Porttitor lacus luctus accumsan tortor posuere ac ut consequat. Gravida quis blandit turpis cursus in hac habitasse platea. Adipiscing bibendum est ultricies integer quis auctor elit sed. Eget velit aliquet sagittis id consectetur purus ut faucibus. Faucibus turpis in eu mi bibendum neque egestas. Pharetra diam sit amet nisl suscipit. Semper viverra nam libero justo laoreet sit amet. Ullamcorper sit amet risus nullam eget felis. Non tellus orci ac auctor augue mauris augue. Nisi quis eleifend quam adipiscing vitae. Ultricies mi quis hendrerit dolor magna. In cursus turpis massa tincidunt dui ut ornare lectus sit. Sed tempus urna et pharetra pharetra.</p>'),
(4, 'O Quarto Título', '<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Hac habitasse platea dictumst quisque. Ultricies mi quis hendrerit dolor magna eget est lorem. Lacinia at quis risus sed vulputate odio. In massa tempor nec feugiat nisl pretium. Tincidunt nunc pulvinar sapien et ligula. Lobortis feugiat vivamus at augue. Non enim praesent elementum facilisis leo vel fringilla. Tincidunt praesent semper feugiat nibh sed. Pharetra et ultrices neque ornare. Tortor id aliquet lectus proin. Tempus egestas sed sed risus pretium quam vulputate dignissim. Vivamus at augue eget arcu. Purus viverra accumsan in nisl nisi scelerisque.</p>

<p>Elementum tempus egestas sed sed. Nisl tincidunt eget nullam non nisi. Non arcu risus quis varius quam quisque id diam. Ac turpis egestas maecenas pharetra. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Enim nunc faucibus a pellentesque sit amet porttitor eget. Nulla facilisi morbi tempus iaculis urna id volutpat lacus. Massa id neque aliquam vestibulum morbi blandit cursus risus. Libero enim sed faucibus turpis in. Bibendum est ultricies integer quis auctor elit sed. Faucibus et molestie ac feugiat. Tristique nulla aliquet enim tortor. Eget nunc scelerisque viverra mauris. Duis at tellus at urna condimentum mattis.</p>

<p>Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum. Diam vel quam elementum pulvinar etiam. Eget mauris pharetra et ultrices neque ornare aenean euismod. Pellentesque dignissim enim sit amet venenatis urna cursus eget nunc. Porttitor lacus luctus accumsan tortor posuere ac ut consequat. Gravida quis blandit turpis cursus in hac habitasse platea. Adipiscing bibendum est ultricies integer quis auctor elit sed. Eget velit aliquet sagittis id consectetur purus ut faucibus. Faucibus turpis in eu mi bibendum neque egestas. Pharetra diam sit amet nisl suscipit. Semper viverra nam libero justo laoreet sit amet. Ullamcorper sit amet risus nullam eget felis. Non tellus orci ac auctor augue mauris augue. Nisi quis eleifend quam adipiscing vitae. Ultricies mi quis hendrerit dolor magna. In cursus turpis massa tincidunt dui ut ornare lectus sit. Sed tempus urna et pharetra pharetra.</p>');

-- Inserindo os dados na tabela 'comments'
INSERT INTO comments (id, id_post, comment, name, email, date_time, id_resp) VALUES
(1, 1, 'Esse Ã© o primeiro comentÃ¡rio nesse post!!', 'Patricia Gomes', 'patricia18@gmail.com', '2020-06-11 11:05:14', NULL),
(2, 1, 'Esse Ã© o segundo comentÃ¡rio!!', 'Paulo da Silva', 'paulo@gmail.com', '2020-06-13 18:25:52', NULL),
(3, 1, 'Respondendo o comentÃ¡rio do Paulo!!', 'Laura', 'laura@gmail.com', '2020-06-15 17:52:13', 2),
(4, 1, 'Segunda reposta para Paulo!!', 'Maicon Tulio', 'maicon@gmail.com', '2020-06-17 18:07:34', 2),
(5, 1, 'O terceiro comentÃ¡rio nesse post!!', 'Miguel Palantino', 'miguel@gmail.com', '2020-06-17 18:16:18', NULL),
(6, 4, 'Primeiro comentÃ¡rio do quarto tÃ­tulo!', 'Tulio', 'tulio@gmail', '2020-06-17 20:56:14', NULL),
(7, 1, 'Respondendo a Laura!!', 'Camila', 'camila@gmail.com', '2020-06-22 11:36:07', 2);