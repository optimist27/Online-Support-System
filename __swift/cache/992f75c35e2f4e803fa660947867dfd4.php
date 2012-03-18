<?php
ob_start(); /* template body */ ?></div>
					</td>
					</tr>
				</table>
			</td>
		</tr></table>
	</td>
  </tr>
</table>
<script type='text/javascript'>
QueryLoader.init();
</script>
</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>