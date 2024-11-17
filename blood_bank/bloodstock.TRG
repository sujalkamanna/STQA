TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `up_bl_st` AFTER UPDATE ON `bloodstock` FOR EACH ROW INSERT INTO tri_upblst VALUES(null, NEW.stock_id, NEW.blood_g, "Updated", NOW())'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci'
created=1686229218317896
