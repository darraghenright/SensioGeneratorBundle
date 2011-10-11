
    /**
     * Lists all {{ entity }} entities.
     *
{% if 'annotation' == format %}
     * @Route("/", name="{{ route_name_prefix }}")
     * @Template()
{% endif %}
     */
    public function indexAction()
    {
        $maxResults = 10;
                
        $qb = $this->getDoctrine()
            ->getEntityManager()
            ->createQueryBuilder();        
        
        $qb->select('q')
           ->from('{{ bundle }}:{{ entity }}', 'q');
        
        $sort  = $this->sortQuery($qb);
        $pages = $this->paginateQuery($qb, $maxResults);
        
        $entities = $qb->getQuery()->getResult();
        
{% if 'annotation' == format %}
        return array(
            'entities' => $entities,
            'sort'     => $sort,
            'pages'    => $pages,
        );
{% else %}
        return $this->render('{{ bundle }}:{{ entity|replace({'\\': '/'}) }}:index.html.twig', array(
            'entities' => $entities,
            'sort'     => $sort,
            'pages'    => $pages,
        ));
{% endif %}
    }
