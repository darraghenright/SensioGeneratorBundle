
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
        $em   = $this->getDoctrine()->getEntityManager();
        $sort = $this->getSortInfo();
        
        if ($sort) {
            $query = sprintf('SELECT q FROM {{ bundle }}:{{ entity }} q ORDER BY q.%s %s', $sort['column'], $sort['order']);
            $entities = $em->createQuery($query)->getResult();
        } else {
            $entities = $em->getRepository('{{ bundle }}:{{ entity }}')->findAll();
        }
{% if 'annotation' == format %}
        return array(
            'entities' => $entities,
            'sort'     => $sort,
        );
{% else %}
        return $this->render('{{ bundle }}:{{ entity|replace({'\\': '/'}) }}:index.html.twig', array(
            'entities' => $entities,
            'sort'     => $sort,
        ));
{% endif %}
    }
