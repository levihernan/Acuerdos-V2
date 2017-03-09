<!-- <nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav> -->

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EL MINISTERIO <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="http://www.produccion.gob.ar/institucional/mision/">MISIÓN</a></li>
        <li><a href="http://www.produccion.gob.ar/institucional/el-ministro/">EL MINISTRO</a></li>
        <li><a href="http://www.produccion.gob.ar/institucional/organigrama/">ORGANIGRAMA</a></li>
        <li><a href="http://www.produccion.gob.ar/institucional/secretarias/secretaria-de-industria-2/">SECRETARIAS</a></li>
        <li><a href="http://www.produccion.gob.ar/institucional/subsecretarias/secretaria-de-industria/">SUBSECRETARIAS</a></li>
        <li><a href="http://www.produccion.gob.ar/casasdelaproduccion/">CASAS DE LA PRODUCCIÓN</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRÁMITES <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="http://www.produccion.gob.ar/guia-de-tramites/">TODOS</a></li>
        <li><a href="http://www.produccion.gob.ar/tramites-de-pymes/">PYME</a></li>
        <li><a href="http://www.produccion.gob.ar/tramites-de-emprendedores/">EMPRENDEDOR</a></li>
        <li><a href="http://www.produccion.gob.ar/tramites-de-consumidor/">CONSUMIDOR</a></li>
        <li><a href="http://www.produccion.gob.ar/tramites-comercio/">COMERCIO</a></li>
        <li><a href="http://www.produccion.gob.ar/tramites-de-industria/">INDUSTRIA</a></li>
        <li><a href="http://www.produccion.gob.ar/instituciones-productivas/">INSTITUCIONES</a></li>
      </ul>
    </li>
    <li><a href="http://www.produccion.gob.ar/sala-de-prensa/comunicados/">SALA DE PRENSA</a></li>
  </ul>
</div>
