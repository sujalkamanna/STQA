TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `D_in_t` AFTER INSERT ON `donor_info` FOR EACH ROW INSERT INTO tri_d VALUES (null, NEW.D_ID, NEW.D_BLOOD_GP, "Inserted", NOW())' 'CREATE DEFINER=`root`@`localhost` TRIGGER `delete_D_t` AFTER DELETE ON `donor_info` FOR EACH ROW INSERT INTO tri_d VALUES(null, OLD.D_ID, OLD.D_BLOOD_GP, "DELETED", NOW())'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
created=1686229791514373 1686230230486999
