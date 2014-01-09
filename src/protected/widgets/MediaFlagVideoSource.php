<?php

class MediaFlagVideoSource extends MediaFlag
{

	protected function getIcon()
	{
		if (preg_match('/\.TS\.|\.TELESYNC\./i', $this->details))
			return 'TS';
	}

}
