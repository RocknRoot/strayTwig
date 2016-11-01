<?php

namespace RocknRoot\StrayFw\Render;

use RocknRoot\StrayFw\Http\Request;
use RocknRoot\StrayFw\Render\ArgsTrait;

/**
 * Twig template render class.
 *
 * @author Nekith <nekith@errant-works.com>
 */
class RenderTwig implements RenderInterface
{
    use ArgsTrait;

    /**
     * Associated request.
     *
     * @var Request
     */
    protected $request;

    /**
     * Templates files directory.
     *
     * @var string
     */
    protected $templatesDir;

    /**
     * Template file name.
     *
     * @var string
     */
    protected $fileName;

    /**
     * Construct render with base arguments.
     *
     * @param Request $request      associated request
     * @param string  $templatesDir templates directory
     * @param string  $fileName     template file name
     * @param array   $args         base arguments
     */
    public function __construct(Request $request, $templatesDir, $fileName, array $args = array())
    {
        $this->args = $args;
        $this->request = $request;
        $this->templatesDir = ltrim(rtrim($templatesDir, DIRECTORY_SEPARATOR), DIRECTORY_SEPARATOR);
        $this->fileName = $fileName;
    }

    /**
     * Return the generated display.
     *
     * @return string content
     */
    public function render()
    {
        $env = Twig::getEnv($this->request->getDir() . DIRECTORY_SEPARATOR . $this->templatesDir);
        $template = $env->loadTemplate($this->fileName);
        if (isset($this->args['request']) === false) {
            $this->args['request'] = $this->request;
        }

        return $template->render($this->args);
    }
}
