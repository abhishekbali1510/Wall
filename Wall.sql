--
-- PostgreSQL database dump
--

-- Dumped from database version 12.4 (Debian 12.4-3)
-- Dumped by pg_dump version 13.2 (Debian 13.2-1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    "userId" bigint NOT NULL,
    "userName" character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_userId_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."users_userId_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."users_userId_seq" OWNER TO postgres;

--
-- Name: users_userId_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."users_userId_seq" OWNED BY public.users."userId";


--
-- Name: users userId; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN "userId" SET DEFAULT nextval('public."users_userId_seq"'::regclass);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.users VALUES (1, 'abhishek', 'abhishek@gmail.com', '123', '2021-04-30 13:54:32', '2021-04-30 13:54:32');
INSERT INTO public.users VALUES (3, 'shivam', 'shivi@gmail.com', 'shiv', '2021-04-30 16:57:42', '2021-04-30 16:57:42');
INSERT INTO public.users VALUES (4, 'freakingud', 'freakingud@gmail.com', 'bca', '2021-05-01 08:18:24', '2021-05-01 08:18:24');
INSERT INTO public.users VALUES (5, 'neeraj17', 'neeraj@gmail.com', 'neer', '2021-05-01 12:48:11', '2021-05-01 12:48:11');


--
-- Name: users_userId_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."users_userId_seq"', 5, true);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY ("userId");


--
-- PostgreSQL database dump complete
--

