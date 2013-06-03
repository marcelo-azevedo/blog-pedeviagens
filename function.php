
function pagination($pages = '', $range = 4)
{
$showitems = ($range * 2)+1;
global $paged;

if(empty($paged)) $paged = 1;

if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}
if(1 != $pages)
{

// Abre a div de paginação
echo '
<div class="pagination">

';

if($paged > 2 &amp;&amp; $paged > $range+1 &amp;&amp; $showitems < $pages)
echo '<a href="'.get_pagenum_link(1).'">« Primeira</a>';

if($paged > 1 &amp;&amp; $showitems < $pages)
echo '<a href="'.get_pagenum_link($paged - 1).'">‹ Seguinte</a>';

for ($i=1; $i = $paged+$range+1 || $i {
echo ($paged == $i)? '<span class="current">'.$i.'</span>':'<a class="inactive" href="'.get_pagenum_link($i).'">'.$i.'</a>';
}
}

if ($paged < $pages &amp;&amp; $showitems < $pages)
echo '<a href="'.get_pagenum_link($paged + 1).'">Próxima ›</a>';

if ($paged < $pages-1 &amp;&amp; $paged+$range-1 < $pages &amp;&amp; $showitems < $pages)
echo '<a href="'.get_pagenum_link($pages).'">Última »</a>';

// Fecha a div de paginação
echo "

</div>
";
}


