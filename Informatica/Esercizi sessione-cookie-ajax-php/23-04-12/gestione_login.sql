START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `mail` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `user` (`id`, `mail`, `password`) VALUES
(1, 'gab@gab.com', 'passw'),
(2, 'q@q', 'q');

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

