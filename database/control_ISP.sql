--
-- PostgreSQL database dump
--

-- Dumped from database version 11.18
-- Dumped by pg_dump version 11.18

-- Started on 2023-01-13 14:23:24

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

SET default_with_oids = false;

--
-- TOC entry 202 (class 1259 OID 16418)
-- Name: data_control; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.data_control (
    id integer NOT NULL,
    sucursal_id integer NOT NULL,
    proveedor_id integer NOT NULL,
    fecha_corte timestamp without time zone,
    fecha_resuelto timestamp without time zone,
    observacion text,
    tiempo_control character varying(50)
);


ALTER TABLE public.data_control OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 16416)
-- Name: data_control_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.data_control_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.data_control_id_seq OWNER TO postgres;

--
-- TOC entry 2834 (class 0 OID 0)
-- Dependencies: 201
-- Name: data_control_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.data_control_id_seq OWNED BY public.data_control.id;


--
-- TOC entry 200 (class 1259 OID 16407)
-- Name: proveedor; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.proveedor (
    id integer NOT NULL,
    proveedor character varying NOT NULL
);


ALTER TABLE public.proveedor OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 16405)
-- Name: proveedor_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.proveedor_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.proveedor_id_seq OWNER TO postgres;

--
-- TOC entry 2835 (class 0 OID 0)
-- Dependencies: 199
-- Name: proveedor_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.proveedor_id_seq OWNED BY public.proveedor.id;


--
-- TOC entry 2699 (class 2604 OID 16421)
-- Name: data_control id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_control ALTER COLUMN id SET DEFAULT nextval('public.data_control_id_seq'::regclass);


--
-- TOC entry 2698 (class 2604 OID 16410)
-- Name: proveedor id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.proveedor ALTER COLUMN id SET DEFAULT nextval('public.proveedor_id_seq'::regclass);


--
-- TOC entry 2828 (class 0 OID 16418)
-- Dependencies: 202
-- Data for Name: data_control; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2826 (class 0 OID 16407)
-- Dependencies: 200
-- Data for Name: proveedor; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.proveedor VALUES (1, 'Tigo');
INSERT INTO public.proveedor VALUES (2, 'Cotas');
INSERT INTO public.proveedor VALUES (3, 'Entel');
INSERT INTO public.proveedor VALUES (4, 'Viva');
INSERT INTO public.proveedor VALUES (5, 'Falla interna');


--
-- TOC entry 2836 (class 0 OID 0)
-- Dependencies: 201
-- Name: data_control_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.data_control_id_seq', 2, true);


--
-- TOC entry 2837 (class 0 OID 0)
-- Dependencies: 199
-- Name: proveedor_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.proveedor_id_seq', 5, true);


--
-- TOC entry 2703 (class 2606 OID 16423)
-- Name: data_control data_control_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_control
    ADD CONSTRAINT data_control_pkey PRIMARY KEY (id);


--
-- TOC entry 2701 (class 2606 OID 16415)
-- Name: proveedor proveedor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.proveedor
    ADD CONSTRAINT proveedor_pkey PRIMARY KEY (id);


-- Completed on 2023-01-13 14:23:25

--
-- PostgreSQL database dump complete
--

