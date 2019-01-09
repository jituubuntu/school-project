#
# Table structure for table 'tx_schoolevaluationkey_domain_model_teacher'
#
CREATE TABLE tx_schoolevaluationkey_domain_model_teacher (

	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	dob date DEFAULT NULL,
	email varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_schoolevaluationkey_domain_model_student'
#
CREATE TABLE tx_schoolevaluationkey_domain_model_student (

	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	marks varchar(255) DEFAULT '' NOT NULL,
	attendance varchar(255) DEFAULT '' NOT NULL,
	dob date DEFAULT NULL,
	email varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_schoolevaluationkey_domain_model_evaluation'
#
CREATE TABLE tx_schoolevaluationkey_domain_model_evaluation (

);
