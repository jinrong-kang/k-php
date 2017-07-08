create database db_ci;
use db_ci;

create table t_user_info (
id_i int not null auto_increment,
name varchar(20),
email varchar(30),
address varchar(30),
tel varchar(15),

primary key (id_i)
);

create table t_client_form (
id_cf int not null auto_increment primary key,
A1 int,		-- age
A2 int,		-- sex
A3 int,		-- client id

B1 int,		-- wifi request
B2a int,    -- using way
B2b text,	-- using way(other)
B3 int,		-- info security
B4 int,		-- info against

C1 int,		--  number control
C2 int,		-- make own value_add
C3 int,		-- publish own adv
C4 int,		-- adv push
C5 int,		-- cooperation
C6 int,		-- open adv right
C7 int,		-- push discount service

D1 text,	-- suggestion

fill_time datetime,

id_ic int not null,

foreign key t_client_form (id_ic) references t_user_info (id_i)
-- CONSTRAINT t_client_form FOREIGN KEY (id_ic)
-- REFERENCES t_user_info(id_i)
-- primary key (id_cf)
);

create table t_user_form (
id_uf int not null auto_increment primary key,
A1 int,		-- age
A2 int,		-- sex
A3 int,		-- user id

B1 int,		-- wifi request
B2a int,    -- using way
B2b text,	-- using way(other)
B3 int,		-- info security
B4 int,		-- info against
B5 int,		-- using time
B6 int,	-- if has wifi
B7 int,	-- time extend

C1a int,	-- waiting adv range
C1b int,	-- click adv range
C1c int,	-- share out range
C1d int,	-- video adv range
C2 int,		-- video adv time
C3 int,	-- relogin after 30mins
C4 int,	-- click interesting info
C5 int,	-- accept discount info

D1 text,	-- suggestion

fill_time datetime,

id_iu int not null,

foreign key t_user_form (id_iu) references t_user_info (id_i)
-- CONSTRAINT t_user_form FOREIGN KEY (id_iu)
-- REFERENCES t_user_info(id_i)

-- primary key (id_uf)
);
