id: 13
source: 1
name: getTechnoList
description: 'Snippet pour remplir les options du tv tech_list'
properties: 'a:0:{}'

-----

if(isset($parents)){
    $resources = array();
    foreach($parents as $id){
        $parent = $modx->getOption('parent',$scriptProperties,$id);
        $parentObj = $modx->getObject('modResource',$parent);
        if (!($parentObj instanceof modResource)) { return ''; }
        $resArray = $parentObj->getMany('Children');
        foreach($resArray as $res) {
          if ($res instanceof modResource) {
            $resources[] = $res->get('pagetitle') . '==' . $res->get('id');
          }
        }
    }
    $out = implode("||",$resources);
    return $out;
}

if(isset($projectList)){
    $list = explode("||",$projectList);
    $html = '';
    foreach($list as $el){
        $res =  $modx->getObject('modResource', $el);
        $html .=  '<div class="tech-element">';
        $html .=  '<img src="assets/theme/images/png/'.$res->get('alias').'.png" alt="Logo '.$res->get('pagetitle').'">';
        $html .=  '<span>'.$res->get('pagetitle').'</span>';
        $html .=  '</div>';
    }
    return $html;
}