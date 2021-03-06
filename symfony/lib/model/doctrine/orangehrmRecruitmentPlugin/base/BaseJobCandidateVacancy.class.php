<?php

/**
 * BaseJobCandidateVacancy
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                                 $id                                       Type: integer(13), unique
 * @property int                                 $candidateId                              Type: integer(13), primary key
 * @property int                                 $vacancyId                                Type: integer(13), primary key
 * @property string                              $status                                   Type: string(100)
 * @property string                              $appliedDate                              Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @property JobVacancy                          $JobVacancy                               
 * @property JobCandidate                        $JobCandidate                             
 * @property Doctrine_Collection|JobInterview[]  $JobInterview                             
 *  
 * @method int                                   getId()                                   Type: integer(13), unique
 * @method int                                   getCandidateid()                          Type: integer(13), primary key
 * @method int                                   getVacancyid()                            Type: integer(13), primary key
 * @method string                                getStatus()                               Type: string(100)
 * @method string                                getApplieddate()                          Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @method JobVacancy                            getJobVacancy()                           
 * @method JobCandidate                          getJobCandidate()                         
 * @method Doctrine_Collection|JobInterview[]    getJobInterview()                         
 *  
 * @method JobCandidateVacancy                   setId(int $val)                           Type: integer(13), unique
 * @method JobCandidateVacancy                   setCandidateid(int $val)                  Type: integer(13), primary key
 * @method JobCandidateVacancy                   setVacancyid(int $val)                    Type: integer(13), primary key
 * @method JobCandidateVacancy                   setStatus(string $val)                    Type: string(100)
 * @method JobCandidateVacancy                   setApplieddate(string $val)               Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @method JobCandidateVacancy                   setJobVacancy(JobVacancy $val)            
 * @method JobCandidateVacancy                   setJobCandidate(JobCandidate $val)        
 * @method JobCandidateVacancy                   setJobInterview(Doctrine_Collection $val) 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobCandidateVacancy extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_job_candidate_vacancy');
        $this->hasColumn('id', 'integer', 13, array(
             'type' => 'integer',
             'unique' => true,
             'length' => 13,
             ));
        $this->hasColumn('candidate_id as candidateId', 'integer', 13, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 13,
             ));
        $this->hasColumn('vacancy_id as vacancyId', 'integer', 13, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 13,
             ));
        $this->hasColumn('status', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('applied_date as appliedDate', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('JobVacancy', array(
             'local' => 'vacancyId',
             'foreign' => 'id'));

        $this->hasOne('JobCandidate', array(
             'local' => 'candidateId',
             'foreign' => 'id'));

        $this->hasMany('JobInterview', array(
             'local' => 'id',
             'foreign' => 'candidateVacancyId'));
    }
}