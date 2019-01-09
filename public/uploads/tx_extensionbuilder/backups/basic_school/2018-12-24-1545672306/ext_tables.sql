#
# Table structure for table 'tx_basicschool_domain_model_student'
#
CREATE TABLE tx_basicschool_domain_model_student (

	class varchar(255) DEFAULT '' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	marks varchar(255) DEFAULT '' NOT NULL,
	attendence varchar(255) DEFAULT '' NOT NULL,
	marks_relation int(11) unsigned DEFAULT '0',
	attendence_relation int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_basicschool_domain_model_teacher'
#
CREATE TABLE tx_basicschool_domain_model_teacher (

	name varchar(255) DEFAULT '' NOT NULL,
	department varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,

);
