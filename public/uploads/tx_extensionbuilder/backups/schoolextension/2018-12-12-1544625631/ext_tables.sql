#
# Table structure for table 'tx_schoolextension_domain_model_teacher'
#
CREATE TABLE tx_schoolextension_domain_model_teacher (

	teacher_id int(11) DEFAULT '0' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	mail_id varchar(255) DEFAULT '' NOT NULL,
	about_me varchar(255) DEFAULT '' NOT NULL,
	department int(11) unsigned DEFAULT '0',
	classes int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_schoolextension_domain_model_department'
#
CREATE TABLE tx_schoolextension_domain_model_department (

	department_id int(11) DEFAULT '0' NOT NULL,
	department_name varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_schoolextension_domain_model_classes'
#
CREATE TABLE tx_schoolextension_domain_model_classes (

	teacher int(11) unsigned DEFAULT '0' NOT NULL,

	class_id int(11) DEFAULT '0' NOT NULL,
	class_name varchar(255) DEFAULT '' NOT NULL,
	department int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_schoolextension_domain_model_student'
#
CREATE TABLE tx_schoolextension_domain_model_student (

	student_id int(11) DEFAULT '0' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	dob date DEFAULT NULL,
	contact varchar(255) DEFAULT '' NOT NULL,
	classes int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_schoolextension_domain_model_mark'
#
CREATE TABLE tx_schoolextension_domain_model_mark (

	marks double(11,2) DEFAULT '0.00' NOT NULL,
	student int(11) unsigned DEFAULT '0',
	classes int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_schoolextension_domain_model_classes'
#
CREATE TABLE tx_schoolextension_domain_model_classes (

	teacher int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_schoolextension_domain_model_teacher'
#
CREATE TABLE tx_schoolextension_domain_model_teacher (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_schoolextension_domain_model_department'
#
CREATE TABLE tx_schoolextension_domain_model_department (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_schoolextension_domain_model_classes'
#
CREATE TABLE tx_schoolextension_domain_model_classes (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_schoolextension_domain_model_student'
#
CREATE TABLE tx_schoolextension_domain_model_student (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_schoolextension_domain_model_mark'
#
CREATE TABLE tx_schoolextension_domain_model_mark (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);
