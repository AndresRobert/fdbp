<?php

use Base\Model;
use Kits\Database\MySQL;

/**
 * Class Contract
 */
class Contract extends Model {

    public function __construct () {
        $this->table = 'contracts';
        parent::__construct();
    }

    /**
     * Gets all contracts for listing
     *
     * @return array
     */
    public function list (): array {
        $query = 'SELECT 
            c.id, 
            if(c.invoice = 0, "", c.invoice) invoice, 
            c.date, 
            c.s_id, 
            c.s_name, 
            c.s_last_name, 
            c.s_address, 
            c.s_comune_id,
            sc.name s_comune_name,
            c.s_region_id,
            sc.region_name s_region_name,
            c.s_mobile,
            c.s_email,
            c.s_phone,
            c.d_id,
            c.d_name,
            c.d_address,
            c.d_comune_id,
            dc.name d_comune_name,
            c.d_region_id,
            dc.region_name d_region_name,
            c.d_marital_status,
            c.d_education,
            c.d_occupation,
            c.d_place,
            c.c_church,
            c.c_address,
            c.c_comune_id,
            cc.name c_comune_name,
            c.c_region_id,
            cc.region_name c_region_name,
            c.f_cementery_id,
            cem.name f_cementery_name,
            DATE(c.f_datetime) f_date,
            TIME(c.f_datetime) f_time,
            c.v_service_id,
            ser.name v_service_name,
            c.v_provider_id,
            pro.name v_provider_name,
            c.v_color,
            c.v_include,
            c.v_observation,
            c.v_warning,
            c.v_cost,
            c.v_discount,
            c.v_total,
            c.v_insurance_id,
            ins.name v_insurance_name,
            c.v_coverage,
            c.v_payment,
            c.p_transfer,
            c.p_cash,
            c.p_check,
            c.p_check_defered,
            c.p_credit_card,
            c.p_other
        FROM contracts c
            INNER JOIN comunes sc ON sc.id = c.s_comune_id
            INNER JOIN comunes dc ON dc.id = c.d_comune_id
            INNER JOIN comunes cc ON cc.id = c.c_comune_id
            INNER JOIN cementeries cem ON cem.id = c.f_cementery_id
            INNER JOIN services ser ON ser.id = c.v_service_id
            INNER JOIN providers pro ON pro.id = c.v_provider_id
            INNER JOIN insurances ins ON ins.id = c.v_insurance_id
        WHERE c.status = 1';
        $result = MySQL::ComplexSelect($query);
        if ($result['status'] === 'success') {
            return $result['response'];
        }
        return [];
    }

}