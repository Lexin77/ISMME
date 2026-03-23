TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER after_reading_insert\nAFTER INSERT ON Reading\nFOR EACH ROW\nBEGIN\n    UPDATE User\n    SET Reading_Count = Reading_Count + 1\n    WHERE User_Code = NEW.User_Code;\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER after_reading_delete\nAFTER DELETE ON Reading\nFOR EACH ROW\nBEGIN\n    UPDATE User\n    SET Reading_Count = Reading_Count - 1\n    WHERE User_Code = OLD.User_Code;\nEND'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
created=1733677825568487 1733678017359497
