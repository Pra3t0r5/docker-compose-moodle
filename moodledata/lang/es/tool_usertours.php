<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_usertours', language 'es', version '3.5'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Encima';
$string['actions'] = 'Acciones';
$string['appliesto'] = 'Se aplica a';
$string['backdrop'] = 'Mostrar con sombreado';
$string['backdrop_help'] = 'Puede usar un sombreado para resaltar la parte de la página a la que está apuntando.

 Nota: Los sombreados no son compatibles con algunas partes de la página, como por ejemplo la Barra de Navegación.';
$string['below'] = 'Debajo';
$string['block'] = 'Bloque';
$string['block_named'] = 'Bloque llamado \'{$a}\'';
$string['cachedef_stepdata'] = 'Lista de pasos del tour para usuarios';
$string['cachedef_tourdata'] = 'Lista de información de tours para usuario habilitados que son buscados en cada página';
$string['confirmstepremovalquestion'] = '¿Seguro que desea eliminar este paso?';
$string['confirmstepremovaltitle'] = 'Confirmar eliminación del paso';
$string['confirmtourremovalquestion'] = '¿Está seguro de querer quitar este tour?';
$string['confirmtourremovaltitle'] = 'Confirmar eliminación de tour';
$string['content'] = 'Contenido';
$string['content_heading'] = 'Contenido';
$string['content_help'] = 'El contenido que describe el  paso puede añadirse como texto simple, rodeado por marcas (tags) multi-idioma (para usarse con el filtro de contenido multi-idioma) si se requiere.

Alternativamente, puede usar una ID de una cadena-de-caracteres del idioma en el formato identificador,componente (sin paréntesis ni espacio después de la coma).';
$string['cssselector'] = 'Selector CSS';
$string['defaultvalue'] = 'Por defecto ({$a})';
$string['delay'] = 'Retardo antes de mostrar el paso';
$string['delay_help'] = 'Opcionalmente puede elegir añadir un retraso antes de se muestre un paso.

El retraso es en milisegundos.';
$string['description'] = 'Descripción';
$string['done'] = 'Finalizado';
$string['editstep'] = 'Editando "{$a}"';
$string['enabled'] = 'Habilitado';
$string['endtour'] = 'Terminar tour';
$string['event_step_shown'] = 'Paso mostrado';
$string['event_tour_ended'] = 'Tour terminado';
$string['event_tour_reset'] = 'Tour reiniciado';
$string['event_tour_started'] = 'Tour iniciado';
$string['exporttour'] = 'Exportar tour';
$string['filter_category'] = 'Categoría';
$string['filter_category_help'] = 'Mostrar el tour en una página que está asociada con un curso en la categoría seleccionada.';
$string['filter_course'] = 'Cursos';
$string['filter_course_help'] = 'Mostrar el tour en una página que está asociada con el curso seleccionado.';
$string['filter_courseformat'] = 'Formato del curso';
$string['filter_courseformat_help'] = 'Mostrar el tour en una página que está asociada con un curso usando el formato de curso seleccionado.';
$string['filter_header'] = 'Filtros del tour';
$string['filter_help'] = 'Selecione las condiciones bajo las que se mostrará el tour. Todos los filtros deben de coincidir para que un tour se le muestre a un usuario.';
$string['filter_role'] = 'Rol';
$string['filter_role_help'] = 'Un tour puede estar restringido a usuarios con roles seleccionados en el contexto en donde se muestra el tour. Por ejemplo, el restringir un tour del Área personal a usuarios con el rol de estudiante no funcionará si los usuarios tienen el rol de estudiante en un curso (como generalmente sucede). Un tour del Área personal solamente puede restringirse a usuarios con un rol del sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Mostrar el tour cuando el usuario esté usando uno de los temas seleccionados.';
$string['importtour'] = 'Importar tour';
$string['left'] = 'Izquierda';
$string['modifyshippedtourwarning'] = 'Este es un tour para usuario que se ha incluido con Moodle. Cualquier modificación que  haga puede ser anulada durante su siguiente actualización del sitio.';
$string['movestepdown'] = 'Mover un paso abajo';
$string['movestepup'] = 'Mover un paso arriba';
$string['movetourdown'] = 'Mover tour hacia abajo';
$string['movetourup'] = 'Mover tour hacia arriba';
$string['name'] = 'Nombre';
$string['newstep'] = 'Nuevo paso';
$string['newtour'] = 'Crear nuevo tour';
$string['next'] = 'Siguiente';
$string['options_heading'] = 'Opciones';
$string['orphan'] = 'Mostrar si el objetivo no se encuentra';
$string['orphan_help'] = 'Mostrar el paso si no pudo encontrarse el destino en la página.';
$string['pathmatch'] = 'Aplicar a la coincidencia de URL';
$string['pathmatch_help'] = 'Los tours serán mostrados en cualquier página cuya URL coincida con este valor.

Puede usar el caracter  % como un comodín para significar cualquier cosa. Algunos valores de ejemplo incluyen:

* /my/% - para coincidir con el Área Personal
* /course/view.php?id=2 - para coincidir con un curso específico
* /mod/forum/view.php% - para coincidir con la lista de discusión del foro
* /user/profile.php% - para coincidir con la página del perfil del usuario

Si quisiera mostrar un tour en la Página inicial del Sitio (hogar/portada), Usted puede usar el valor: "FRONTPAGE".';
$string['pausetour'] = 'Pausa';
$string['placement'] = 'Posicionamiento';
$string['placement_help'] = 'Un paso puede colocarse, ya sea arriba, debajo, a la izquierda del, o a la derecha del destino. Se recomienda arriba de o debajo de, porque éstos se ajustan mejor para visualizarse en dispositivos móviles.

Si el paso no cupiera en una página particular en el sitio especificado, será colocado automáticamente en otra parte.';
$string['pluginname'] = 'Tours para usuarios';
$string['privacy:metadata:preference:completed'] = 'La hora en la que un usuario completó por vez última un tour para usuario.';
$string['privacy:metadata:preference:requested'] = 'La hora en la que un usuario solicitó manualmente por última vez un tour para usuario.';
$string['privacy:request:preference:completed'] = 'Marcó por última vez el tour para usuario "{$a->name}" como completado en {$a->time}';
$string['privacy:request:preference:requested'] = 'Solicitó por última vez el tour para usuario  "{$a->name}" en {$a->time}';
$string['reflex'] = 'Proceder al hacer click';
$string['reflex_help'] = 'Proceder al siguiente paso cuando se hace click sobre el destino.';
$string['resettouronpage'] = 'Reiniciar tour para usuario en esta página';
$string['resumetour'] = 'Continuar';
$string['right'] = 'Derecha';
$string['select_block'] = 'Selecciona un bloque';
$string['selector_defaulttitle'] = 'Introduce un título descriptivo';
$string['selectordisplayname'] = 'Un selector CSS conteniendo \'{$a}\'';
$string['selecttype'] = 'Seleccionar tipo de paso';
$string['sharedtourslink'] = 'Repositorio de tours';
$string['skip'] = 'Omitir';
$string['target'] = 'Objetivo';
$string['target_block'] = 'Bloquear';
$string['target_heading'] = 'Destino del paso';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'Selectores CSS';
$string['target_selector_targetvalue_help'] = 'Se puede usar un Selector CSS para dirigirse a casi cualquier elemento de la página. El selector apropiado puede encontrarse fácilmente usando las herramientas para desarrolladores de su navegador de Internet.';
$string['target_unattached'] = 'Mostrar en medio de la página';
$string['targettype'] = 'Tipo de destino';
$string['targettype_help'] = 'Cada paso está asociado con una parte de la página - el destino. Los tipos de  destinos son:.

* Bloque - para mostrar un paso junto a un bloque especificado
* Selector CSS - para definir con precisión el área destino usando CSS
* Mostrar a la mitad de la página - para un paso que no necesita estar asociado con una parte especifica de la página';
$string['title'] = 'Título';
$string['title_help'] = 'El título de un paso puede añadirse como texto simple, rodeado por marcas multi-idioma (para usarse con el filtro de contenido multi-idioma) si se necesita.

Alternativamente, puede ingresarse una ID de cadena-de-caracteres del idioma en el formato de identificador,componente (sin paréntesis ni espacio después de la coma).';
$string['tour1_content_addingblocks'] = 'De hecho, piense cuidadosamente si incluir algun bloque en sus páginas. Los bloques no se muestran en la App de Moodle Mobile, por lo que, de forma general, es mucho mejor asegurarse de que el sitio funciona bien sin bloques.';
$string['tour1_content_blockregion'] = 'Todavía hay una región de bloque aquí. Nosotros recomendamos quitar los bloques de Navegación y Administración completamente, porque toda la funcionalidad está en otra parte en el tema Boost (Impulso).';
$string['tour1_content_customisation'] = 'Para personalizar  la apariencia de su sitio y de la Portada, use el menú de configuraciones en la esquina de este encabezado. Intente activar la edición ahora mismo.';
$string['tour1_content_end'] = 'Este ha sido un tour para usuario, No volverá a mostrarse a menos de que lo reinicie usando el enlace en el pie de página. ¡Cómo administrador también puede crear sus propios tours como éste!';
$string['tour1_content_navigation'] = 'La navegación principal es ahora a través de este bloque de navegación. La actualización de los contenidos depende de dónde se encuentre en el sitio. Utilice el botón en la parte superior para ocultarlo o mostrarlo.';
$string['tour1_content_welcome'] = 'Bienvenido al tema Boost. Si ha actualizado desde una versión anterior, es posible que algunas cosas se vean un poco diferentes con este tema.';
$string['tour1_title_addingblocks'] = 'Añadiendo bloques';
$string['tour1_title_blockregion'] = 'Región del bloque';
$string['tour1_title_customisation'] = 'Personalización';
$string['tour1_title_end'] = 'Fin del tour';
$string['tour1_title_navigation'] = 'Navegación';
$string['tour1_title_welcome'] = 'Bienvenida';
$string['tour2_content_addblock'] = 'Si habilita el modo de edición, puede añadir bloques desde el cajón de navegación. Sin embargo, piense cuidadosamente acerca de incluir algun bloque en sus páginas. Los bloques no se muestran en la App de Moodle Mobile, por lo que para una mejor experiencia para el usuario, sería mucho mejor que se asegure de que su curso funciona bien sin bloques.';
$string['tour2_content_addingblocks'] = 'Puede añadir bloques a esta página usando este botón. Sin embargo, piense cuidadosamente si incluir algun bloque en sus páginas. Los bloques no se muestran en la App de Moodle Mobile, por lo que para una mejor experiencia para el usuario, sería mucho mejor que se asegure de que su curso funciona bien sin bloques.';
$string['tour2_content_customisation'] = 'Para cambiar cualquier configuración de curso, utilice el menú de configuración de la esquina de este encabezado. También encontrará un menú de configuración similar en la página principal de todas las actividades. Prueba a cambiar la edición en este momento.';
$string['tour2_content_end'] = 'Este ha sido un tour para usuario, una característica nueva de Moodle 3.2. No volverá a mostrarse a menos de que lo reinicie usando el enlace en el pie de página. El administrador del sitio también puede crear otros tours.';
$string['tour2_content_navigation'] = 'La navegación es ahora a través de este bloque de navegación. Utilice el botón en la parte superior para ocultarlo o mostrarlo. Verá que hay enlaces para secciones de su curso.';
$string['tour2_content_opendrawer'] = 'Intentar abrir el cajón de navegación ahora.';
$string['tour2_content_participants'] = 'Ver los participantes aquí. Aquí además es donde podrás añadir o quitar estudiantes.';
$string['tour2_content_welcome'] = 'Bienvenido al tema Boost. Si su sitio ha sido actualizado desde una versión anterior, es posible que las cosas se vean un poco diferentes en la página del curso.';
$string['tour2_title_addblock'] = 'Añadir un bloque';
$string['tour2_title_addingblocks'] = 'Añadiendo bloques';
$string['tour2_title_customisation'] = 'Personalización';
$string['tour2_title_end'] = 'Fin del tour';
$string['tour2_title_navigation'] = 'Navegación';
$string['tour2_title_opendrawer'] = 'Abrir el cajón de navegación';
$string['tour2_title_participants'] = 'Participantes del curso';
$string['tour2_title_welcome'] = 'Bienvenida';
$string['tour_resetforall'] = 'El estado del tour ha sido reiniciado. Se mostrará nuevamente a todos los usuarios.';
$string['tourconfig'] = 'Archivo de configuración de tour a importar';
$string['tourisenabled'] = 'El Tour está habilitado';
$string['tourlist_explanation'] = 'Puede crear tantos tours como desee y habilitarlos para diferentes partes de Moodle. Solamente puede crearse un tour por página.';
$string['tours'] = 'Tours';
$string['usertours'] = 'Tours para usuario';
$string['usertours:managetours'] = 'Crear, editar, y eliminar tours para usuarios';
$string['viewtour_edit'] = 'Puede <a href="{$a->editlink}">editar los valores por defecto del tour</a> y <a href="{$a->resetlink}">forzar a que se muestre el tour</a> nuevamente a todos los usuarios.';
$string['viewtour_info'] = 'Este es el tour \'{$a->tourname}\'. Aplica a la ruta \'{$a->path}\'.';
