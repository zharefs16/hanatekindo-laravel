PGDMP      #            
    |            test    16.3    16.3 0    ;           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            <           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            =           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            >           1262    18285    test    DATABASE     f   CREATE DATABASE test WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'C';
    DROP DATABASE test;
                postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
                pg_database_owner    false            ?           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                   pg_database_owner    false    4            �            1259    109888    icon    TABLE     R   CREATE TABLE public.icon (
    id integer NOT NULL,
    icon character varying
);
    DROP TABLE public.icon;
       public         heap    postgres    false    4            �            1259    109887    icon_id_seq    SEQUENCE     �   CREATE SEQUENCE public.icon_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.icon_id_seq;
       public          postgres    false    4    220            @           0    0    icon_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.icon_id_seq OWNED BY public.icon.id;
          public          postgres    false    219            �            1259    109906    logo    TABLE     �   CREATE TABLE public.logo (
    id integer NOT NULL,
    name character varying,
    image character varying,
    favicon character varying
);
    DROP TABLE public.logo;
       public         heap    postgres    false    4            �            1259    109905    logo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.logo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.logo_id_seq;
       public          postgres    false    222    4            A           0    0    logo_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.logo_id_seq OWNED BY public.logo.id;
          public          postgres    false    221            �            1259    109879    menu    TABLE     �   CREATE TABLE public.menu (
    id integer NOT NULL,
    menu character varying,
    link character varying,
    icon character varying,
    "position" integer
);
    DROP TABLE public.menu;
       public         heap    postgres    false    4            �            1259    109878    menu_id_seq    SEQUENCE     �   CREATE SEQUENCE public.menu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.menu_id_seq;
       public          postgres    false    4    218            B           0    0    menu_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.menu_id_seq OWNED BY public.menu.id;
          public          postgres    false    217            �            1259    109925    picture    TABLE     q   CREATE TABLE public.picture (
    id integer NOT NULL,
    file character varying,
    link character varying
);
    DROP TABLE public.picture;
       public         heap    postgres    false    4            �            1259    109924    picture_id_seq    SEQUENCE     �   CREATE SEQUENCE public.picture_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.picture_id_seq;
       public          postgres    false    4    224            C           0    0    picture_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.picture_id_seq OWNED BY public.picture.id;
          public          postgres    false    223            �            1259    110049    theme    TABLE     i   CREATE TABLE public.theme (
    id integer NOT NULL,
    colour character varying,
    status integer
);
    DROP TABLE public.theme;
       public         heap    postgres    false    4            �            1259    110048    theme_id_seq    SEQUENCE     �   CREATE SEQUENCE public.theme_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.theme_id_seq;
       public          postgres    false    226    4            D           0    0    theme_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.theme_id_seq OWNED BY public.theme.id;
          public          postgres    false    225            �            1259    109870    users    TABLE       CREATE TABLE public.users (
    user_id integer NOT NULL,
    user_email character varying,
    user_fullname character varying,
    user_status integer,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    password character varying
);
    DROP TABLE public.users;
       public         heap    postgres    false    4            �            1259    109869    users_user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.users_user_id_seq;
       public          postgres    false    216    4            E           0    0    users_user_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.users_user_id_seq OWNED BY public.users.user_id;
          public          postgres    false    215            �           2604    109891    icon id    DEFAULT     b   ALTER TABLE ONLY public.icon ALTER COLUMN id SET DEFAULT nextval('public.icon_id_seq'::regclass);
 6   ALTER TABLE public.icon ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    219    220            �           2604    109909    logo id    DEFAULT     b   ALTER TABLE ONLY public.logo ALTER COLUMN id SET DEFAULT nextval('public.logo_id_seq'::regclass);
 6   ALTER TABLE public.logo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    222    222            �           2604    109882    menu id    DEFAULT     b   ALTER TABLE ONLY public.menu ALTER COLUMN id SET DEFAULT nextval('public.menu_id_seq'::regclass);
 6   ALTER TABLE public.menu ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217    218            �           2604    109928 
   picture id    DEFAULT     h   ALTER TABLE ONLY public.picture ALTER COLUMN id SET DEFAULT nextval('public.picture_id_seq'::regclass);
 9   ALTER TABLE public.picture ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    224    224            �           2604    110052    theme id    DEFAULT     d   ALTER TABLE ONLY public.theme ALTER COLUMN id SET DEFAULT nextval('public.theme_id_seq'::regclass);
 7   ALTER TABLE public.theme ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    225    226            �           2604    109873    users user_id    DEFAULT     n   ALTER TABLE ONLY public.users ALTER COLUMN user_id SET DEFAULT nextval('public.users_user_id_seq'::regclass);
 <   ALTER TABLE public.users ALTER COLUMN user_id DROP DEFAULT;
       public          postgres    false    216    215    216            2          0    109888    icon 
   TABLE DATA                 public          postgres    false    220   O.       4          0    109906    logo 
   TABLE DATA                 public          postgres    false    222   /       0          0    109879    menu 
   TABLE DATA                 public          postgres    false    218   -/       6          0    109925    picture 
   TABLE DATA                 public          postgres    false    224   0       8          0    110049    theme 
   TABLE DATA                 public          postgres    false    226   �0       .          0    109870    users 
   TABLE DATA                 public          postgres    false    216   a1       F           0    0    icon_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.icon_id_seq', 10, true);
          public          postgres    false    219            G           0    0    logo_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.logo_id_seq', 1, false);
          public          postgres    false    221            H           0    0    menu_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.menu_id_seq', 6, true);
          public          postgres    false    217            I           0    0    picture_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.picture_id_seq', 3, true);
          public          postgres    false    223            J           0    0    theme_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.theme_id_seq', 8, true);
          public          postgres    false    225            K           0    0    users_user_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.users_user_id_seq', 12, true);
          public          postgres    false    215            �           2606    109895    icon icon_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.icon
    ADD CONSTRAINT icon_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.icon DROP CONSTRAINT icon_pkey;
       public            postgres    false    220            �           2606    109913    logo logo_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.logo
    ADD CONSTRAINT logo_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.logo DROP CONSTRAINT logo_pkey;
       public            postgres    false    222            �           2606    109886    menu menu_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.menu
    ADD CONSTRAINT menu_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.menu DROP CONSTRAINT menu_pkey;
       public            postgres    false    218            �           2606    109932    picture picture_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.picture
    ADD CONSTRAINT picture_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.picture DROP CONSTRAINT picture_pkey;
       public            postgres    false    224            �           2606    110056    theme theme_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.theme
    ADD CONSTRAINT theme_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.theme DROP CONSTRAINT theme_pkey;
       public            postgres    false    226            �           2606    109877    users users_pkey 
   CONSTRAINT     S   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (user_id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    216            2   �   x��н
�0�O��
F����С luO�KmsC�*��RW���|���"��$���}�J>���η� �dFb.[ʄ0`-��xz��?n�ݐ�	2+oXn�vU[{f5�����a���� ��B�nd�!��G����8�!�ू��L�K^u��>��i��E!F��      4   
   x���          0   �   x�����0�=_ѝ����ظ�ȂD���¤4B!}�����	�dwg&=��qpKHxN.�6���Da�c�1/�d��\0��X��.��R^��T5J�XMv^������FI�(3j�#��e ��O��rZ�����F�@߳���������S�*']hPUK�L�ڮ��M�<@�d�2��LƆ�e�u3 ����Yv�um���[�y� w��      6   �   x�����0  w��[51 ��1<jx�F[��-(|�Ƹ89]n��	�Hp��@M����j���+8�Q�Q��V vRH���m���p��6=Ω�f$�v��*�)T^�p������n�o�(���?f�C�7AX9EL��[��JQr�J��\�Lo��i/Q�C)      8   �   x���v
Q���W((M��L�+�H�MUs�	uV�0�QPO�IL�V�Q0д��$���!�(1/=�X�@E�)�*7*�L���/'V�9PGAiQA�N� ���#��&@��E��y�j0k)�A�@�\\ �>pe      .   �   x���9�@��_����vYvm�� 1h���<"B8��P�x�n�N�剓M�nY�lW�����vMV7l�X�L�{-�t��
�ܦ�,�g����qŀ��W�h�����ȵ%_Hy �����b ��C-���gN�����:�s��y��غkkb��
�#�������
����T�y auU     