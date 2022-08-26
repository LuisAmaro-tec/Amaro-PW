# Instituto tecnológico de Nuevo Laredo

## Tarea Modelo de Caja 

## Luis Eduardo Amaro Arizpe 18100148 

### Cajas en bloque y en línea

En CSS, en general, hay dos tipos de cajas: cajas en bloque y cajas en línea. Estas características se refieren al modo como se comporta la caja en términos de flujo de página y en relación con otras cajas de la página: 

**Si una caja se define como un bloque, se comportará de las maneras siguientes:**

La caja fuerza un salto de línea al llegar al final de la línea.
La caja se extenderá en la dirección de la línea para llenar todo el espacio disponible que haya en su contenedor. En la mayoría de los casos, esto significa que la caja será tan ancha como su contenedor, y llenará el 100% del espacio disponible.
Se respetan las propiedades width y height.
El relleno, el margen y el borde mantienen a los otros elementos alejados de la caja.
A menos que decidamos cambiar el tipo de visualización a en línea, elementos como los encabezados (por ejemplo, <"h1">) y todos los elementos <"p"> usan por defecto block como tipo de visualización externa.

Si una caja tiene una visualización externa de tipo inline, entonces:

- La caja no fuerza ningún salto de línea al llegar al final de la línea.

- Las propiedades width y height no se aplican.

- Se aplican relleno, margen y bordes verticales, pero no mantienen alejadas otras cajas en línea.

- Se aplican relleno, margen y bordes horizontales, y mantienen alejadas otras cajas en línea.

El elemento <a, que se utiliza para los enlaces, y los elementos <span, <em y <strong" son ejemplos de elementos que se muestran en línea por defecto. 

El modelo de cajas o “box model” es seguramente la característica más importante del lenguaje de hojas de estilos CSS, ya que condiciona el diseño de todas las páginas web. El modelo de cajas es el comportamiento de CSS que hace que todos los elementos de las páginas se representen mediante cajas rectangulares.

Las cajas de una página se crean automáticamente. Cada vez que se inserta una etiqueta HTML, se crea una nueva caja rectangular que encierra los contenidos de ese elemento. La siguiente imagen muestra las tres cajas rectangulares que crean las tres etiquetas HTML que incluye la página:

Las cajas de las páginas no son visibles a simple vista porque inicialmente no muestran ningún color de fondo ni ningún borde. La siguiente imagen muestra las cajas que forman la página web de http://www.alistapart.com/ después de forzar a que todas las cajas muestren su borde:

![Box](https://uniwebsidad.com/static/libros/imagenes/css/f0401.gif)

Los navegadores crean y colocan las cajas de forma automática, pero CSS permite modificar todas sus características. Cada una de las cajas está formada por seis partes

![Box](https://uniwebsidad.com/static/libros/imagenes/css/f0403.gif)

Las partes que componen cada caja y su orden de visualización desde el punto de vista del usuario son las siguientes:

- Contenido (content): se trata del contenido HTML del elemento (las palabras de un párrafo, una imagen, el texto de una lista de elementos, etc.)
- Relleno (padding): espacio libre opcional existente entre el contenido y el borde.
- Borde (border): línea que encierra completamente el contenido y su relleno.
Imagen de fondo (background image): imagen que se muestra por detrás del contenido y el espacio de relleno.
- Color de fondo (background color): color que se muestra por detrás del contenido y el espacio de relleno.
- Margen (margin): separación opcional existente entre la caja y el resto de cajas adyacentes.


![Esta es una imagen de ejemplo](https://ppazul171993.files.wordpress.com/2015/03/imagen1.png?w=616&h=298)

![Esta es una imagen de ejemplo](https://ppazul171993.files.wordpress.com/2015/03/imagen-31.png?w=617&h=358)

![Esta es una imagen de ejemplo](https://ppazul171993.files.wordpress.com/2015/03/imagen4.png?w=560&h=332)





