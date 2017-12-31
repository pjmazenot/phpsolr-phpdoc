<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
 * (PECL solr &gt;= 0.9.2)<br/>
 * Class SolrException<br/>
 * This is the base class for all exception thrown by the Solr extension classes.
 * @link http://php.net/manual/en/class.solrexception.php
 */
class SolrException extends Exception {

	/** @var int The line in c-space source file where exception was generated */
	protected $sourceline;

	/** @var string The c-space source file where exception was generated */
	protected $sourcefile;

	/** @var string The c-space function where exception was generated */
	protected $zif_name;

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns internal information where the Exception was thrown
	 * @link http://php.net/manual/en/solrexception.getinternalinfo.php
	 */
	public function getInternalInfo() {}

}