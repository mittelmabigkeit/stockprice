<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

	<div class="shareholders-fund">
		<div class="sf-item">
			<div class="sf-item__title">
                <? if (SITE_ID == "s2") { ?>
                    ROSINTER RESTORANTS (PJSC)
                <? } else { ?>
                    <?= $arResult['NAME'] ?>
                <? } ?>
			</div>
			<div class="sf-item__row">
				<div class="sf-item__left">
					<div class="sf-item__price">
						<?= $arResult['COST'] ?> ₽
					</div>
					<? if($arResult['COST_CHANGE'] > 0): ?>
						<div class="sf-item__plus">
							<?= $arResult['COST_CHANGE'] ?>
							<i>
								<svg width="9" height="15" viewBox="0 0 9 15" fill="none"
									 xmlns="http://www.w3.org/2000/svg">
									<path d="M4.50001 1.18164V13.8199M4.50001 1.18164L0.957458 4.72419M4.50001 1.18164L7.94682 4.72419"
										  stroke="#31C27C" stroke-width="2.01064" stroke-miterlimit="22.9256"
										  stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</i>
						</div>
					<? else: ?>
						<div class="sf-item__minus">
							<?= $arResult['COST_CHANGE'] ?>
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 15" height="15" width="9">
									<g xmlns="http://www.w3.org/2000/svg" transform="matrix(-1 0 0 -1 9 15)">
										<path d="M4.50001 1.18164V13.8199M4.50001 1.18164L0.957458 4.72419M4.50001 1.18164L7.94682 4.72419" stroke="red" stroke-width="2.01064" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"></path>
									</g>
								</svg>
							</i>
						</div>
					<? endif; ?>
					<div class="sf-item__text">
                        <?=GetMessage("MOSBIRZHA")?>
					</div>
					<div class="sf-item__desc">
                        <?=GetMessage("UPDATED")?> <?= date("d.m.Y H:i",strtotime($arResult['DATE'])) ?>
					</div>
				</div>
				<div class="sf-item__right">
					<div class="sfi-item">
						<div class="sfi-item__title">
                            <?=GetMessage("TICKER")?>
						</div>
						<div class="sfi-item__text">
							<?= $arResult['TICKER'] ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shareholders-fund__text">
            <?=GetMessage("TEXT")?>
		</div>
	</div>
