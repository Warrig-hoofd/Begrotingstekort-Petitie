<?php

class Model_foundings extends CI_Model
{
    /**
     * Model_foundings constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Count the signatures money amounts.
     *
     * @param  string $param the criteria.
     * @return integer
     */
    public function count($param)
    {

        if ($this->db->num_rows() > 0) // There are records found
        {
            return $this->db->num_rows();
        }
        else // There are no records found.
        {
            return 0;
        }
    }
}