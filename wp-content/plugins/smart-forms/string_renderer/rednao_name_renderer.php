<?php


class rednao_name_renderer extends rednao_base_elements_renderer {


    public function GetString($formElement,$entry)
    {
        return htmlspecialchars($entry["firstName"].' '.$entry["lastName"]);
    }

	public function GetExValues($formElement, $entry)
	{
		return array(
			"exvalue1"=>htmlspecialchars($entry["firstName"]),
			"exvalue2"=>htmlspecialchars($entry["lastName"])
		);
	}
}