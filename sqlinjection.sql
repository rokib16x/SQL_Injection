

CREATE TABLE `logger` (
  `username` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `block_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `logger` (`username`, `time`, `block_status`) VALUES
('011193040', '08:23:32pm 2023/08/03', 0),
('011193040', '08:23:32pm 2023/08/03', 0),
('011193040', '08:43:52pm 2023/08/03', 0),
('011193040', '08:53:38pm 2023/08/03', 0),
('admin', '09:30:48pm 2023/08/03', 0),
('admin', '09:34:26pm 2023/08/03', 0);


CREATE TABLE `student` (
  `student_id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `user_id` varchar(20) NOT NULL,
  `contact_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `email`, `date_of_birth`, `gender`, `city`, `user_id`, `contact_number`) VALUES
('011193040', 'Rokibul', 'Hasan', 'rokib16x@gmail.com', NULL, '', NULL, '011193040', NULL),
('admin', 'Admin', 'rokib', 'rokib@gmail.com', NULL, NULL, NULL, 'admin', NULL);


CREATE TABLE `student_user` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `2FA_code` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `student_user` (`user_id`, `password`, `2FA_code`) VALUES
('011193040', '22gifta59E@', '1754'),
('admin', 'Admin123$', '8841');

ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

ALTER TABLE `student_user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;
