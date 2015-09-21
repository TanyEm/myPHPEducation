SELECT * FROM public.data;
INSERT INTO public.data("value") VALUES ('Lenovo'),('HP'),('Acer'),('ASUS');
INSERT INTO public.data(value) VALUES ('DELL');
DELETE FROM public.data WHERE id = 5;
UPDATE public.data SET value = 'NOKIA' WHERE id = 7;
DELETE FROM public.data WHERE value = 'NOKIA';
SELECT * FROM public.data ORDER BY value ASC;