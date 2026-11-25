<div class="container app-main">
	<div class="row">
		<div class="col-12">
			<div class="app-title">
				<h1>⚡ Campanhas</h1>
				<div class="app-title-desc">Escolha sua Sorte!</div>
			</div>
		</div>
	</div>
	<?php
	$qry = $conn->query('SELECT * FROM `product_list` WHERE status_display <> \'4\' AND featured_draw = \'1\' ORDER BY RAND() LIMIT 1');
	while ($row = $qry->fetch_assoc()) { ?>
		<div class="col-12 mb-2">
			<a href="/campanha/<?php echo $row['slug']; ?>" class="SorteioTpl_sorteioTpl__2s2Wu SorteioTpl_destaque__3vnWR pointer custom-highlight-card">
				<div class="custom-badge-display">
					<?php if ($row['status_display'] == 1) { ?>
						<span class="badge bg-success blink bg-opacity-75 font-xsss">Adquira já!</span>
					<?php } ?>
					<?php if ($row['status_display'] == 2) { ?>
						<span class="badge bg-dark blink font-xsss mobile badge-status-1">Corre que está acabando!</span>
					<?php } ?>
					<?php if ($row['status_display'] == 3) { ?>
						<span class="badge bg-dark font-xsss mobile badge-status-3">Aguarde a campanha!</span>
					<?php } ?>
					<?php if ($row['status_display'] == 4) { ?>
						<span class="badge bg-dark font-xsss">Concluído</span>
						<?php
						$date_of_draw = strtotime($row['date_of_draw']);
						$date_of_draw = date('d/m', $date_of_draw);
						?>
						<div class="SorteioTpl_dtSorteio__2mfSc custom-calendar-display">
							<i class="bi bi-calendar2-check"></i> <?php echo $date_of_draw; ?>
						</div>
					<?php } ?>
					<?php if ($row['status_display'] == 5) { ?>
						<span class="badge bg-dark font-xsss">Em breve!</span>
					<?php } ?>
					<?php if ($row['status_display'] == 6) { ?>
						<span class="badge bg-dark font-xsss">Aguarde o sorteio!</span>
					<?php } ?>
				</div>
				<div class="SorteioTpl_imagemContainer__2-pl4 col-auto">
					<div id="carouselSorteio640d0a84b1fef407920230311" class="carousel slide carousel-dark carousel-fade" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active" style="width:100%;height:420px">
								<div style="display:block;overflow:hidden;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;margin:0">
									<img alt="<?php echo $row['name']; ?>" src="<?php echo validate_image($row['image_path']); ?>" decoding="async" data-nimg="fill" class="SorteioTpl_imagem__2GXxI" style="object-fit:cover;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%">
									<noscript>
										<img alt="<?php echo $row['name']; ?>" src="<?php echo validate_image($row['image_path']); ?>" decoding="async" data-nimg="fill" style="object-fit:cover;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" class="SorteioTpl_imagem__2GXxI" loading="lazy" />
									</noscript>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="SorteioTpl_info__t1BZr custom-content-wrapper">
					<h1 class="SorteioTpl_title__3RLtu"><?php echo $row['name']; ?></h1>
					<p class="SorteioTpl_descricao__1b7iL" style="margin-bottom:1px"><?php echo (isset($row['subtitle']) ? $row['subtitle'] : ''); ?></p>
				</div>
			</a>
			

		</div>
	<?php } ?>

	<?php

	$qry = $conn->query('SELECT * FROM `product_list` WHERE featured_draw = \'0\' AND private_draw = \'0\' ORDER BY id DESC LIMIT 10');

	if (0 < $qry->num_rows) {
		while ($row = $qry->fetch_assoc()) {
	?>
			<div class="col-12 mb-2">
				<a href="/campanha/<?php echo $row['slug']; ?>">
					<div class="SorteioTpl_sorteioTpl__2s2Wu pointer">
						<div class="SorteioTpl_imagemContainer__2-pl4 col-auto">
							<div style="display:block;overflow:hidden;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;margin:0">
								<img alt="1.500,00 com apenas 0,03 centavos" src="<?php echo validate_image($row['image_path']); ?>" decoding="async" data-nimg="fill" class="SorteioTpl_imagem__2GXxI" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%">
								<noscript>
									<img alt="1.500,00 com apenas 0,03 centavos" src="<?php echo validate_image($row['image_path']); ?>" decoding="async" data-nimg="fill" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" class="SorteioTpl_imagem__2GXxI" loading="lazy" />
								</noscript>
							</div>
						</div>
						<div class="SorteioTpl_info__t1BZr">
							<h1 class="SorteioTpl_title__3RLtu"><?php echo $row['name']; ?></h1>
							<p class="SorteioTpl_descricao__1b7iL" style="margin-bottom:1px"><?php echo isset($row['subtitle']) ? $row['subtitle'] : ''; ?></p>

							<?php if ($row['status_display'] == 1) { ?>
								<span class="badge bg-success blink bg-opacity-75 font-xsss">Adquira já!</span>
							<?php } elseif ($row['status_display'] == 2) { ?>
								<span class="badge bg-dark blink font-xsss mobile badge-status-1">Corre que está acabando!</span>
							<?php } elseif ($row['status_display'] == 3) { ?>
								<span class="badge bg-dark font-xsss mobile badge-status-3">Aguarde a campanha!</span>
							<?php } elseif ($row['status_display'] == 4) { ?>
								<span class="badge bg-dark font-xsss">Concluído</span>
								<div class="SorteioTpl_dtSorteio__2mfSc">
									<i class="bi bi-calendar2-check"></i> <?php echo date('d/m', strtotime($row['date_of_draw'])); ?>
								</div>
							<?php } elseif ($row['status_display'] == 5) { ?>
								<span class="badge bg-dark font-xsss">Em breve!</span>
							<?php } elseif ($row['status_display'] == 6) { ?>
								<span class="badge bg-dark font-xsss">Aguarde o sorteio!</span>
							<?php } ?>
						</div>
					</div>
				</a>
			</div>
	<?php
		}
	}
	?>
	<div class="col-12">
		<div class="app-helpers mb-2">
			<div class="row">
				<div class="col col-contato-display">
					<div class="d-flex align-items-center w-100 justify-content-center font-xs bg-white bg-opacity-25 box-shadow-08 p-2 rounded-10">
						<div class="icone font-lg bg-dark rounded p-2 me-2 bg-opacity-10">🤷</div>
						<?php
						if (CONTACT_TYPE == '1') {
							echo '<a href="/contato">';
						} else {
							echo '<a href="https://api.whatsapp.com/send/?phone=55' . $_settings->info('phone') . '">';
						}
						?>
						<div class="txt">
							<h3 class="mb-0 font-md">Dúvidas</h3>
							<p class="mb-0 font-xs">Fale conosco</p>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php

	$sql = 'SELECT name AS product_name, draw_number, draw_winner, image_path, slug, date_of_draw FROM product_list WHERE draw_number <> \'\' ORDER BY date_of_draw DESC LIMIT 5';
	$products = $conn->query($sql);

	if (0 < $products->num_rows) {
	?>
		<div class="app-ganhadores mb-2">
			<div class="col-12">
				<div class="app-title">
					<h1>🎉 Ganhadores</h1>
					<div class="app-title-desc">sortudos</div>
				</div>
			</div>

			<div class="col-12">
				<div class="row">
					<?php
					while ($row = $products->fetch_assoc()) {
						$product_name = $row['product_name'];
						$draw_number = $row['draw_number'];
						$draw_name = $row['draw_winner'];
						$draw_number_arr = json_decode(json_encode($draw_number));
						$draw_winner_arr = json_decode(json_encode($draw_name));
						$draw_number = $draw_number_arr[0];
						$draw_name = $draw_winner_arr[0];
						$date_of_draw = strtotime($row['date_of_draw']);
						$date_of_draw = date('d/m/y', $date_of_draw);
						$image_path = validate_image($row['image_path']);

						if (!empty($draw_number_arr)) {
							$draw_number_arr = (isset($draw_number_arr) ? $draw_number_arr : '');

							if ($draw_number_arr) {
								$draw_winner_arr = json_decode($draw_winner_arr, true);
								$draw_number_arr = json_decode($draw_number_arr, true);
								$winners = [];

								foreach ($draw_winner_arr as $qty_index => $name) {
									foreach ($draw_number_arr as $amount_index => $number) {
										$query = $conn->query('SELECT CONCAT(firstname, \' \', lastname) as name, avatar FROM customer_list WHERE phone = \'' . $name . '\'');
										$rowCustomer = $query->fetch_assoc();

										if ($qty_index === $amount_index) {
											$winners[$qty_index] = [
												'name' => $rowCustomer['name'],
												'number' => $number,
												'product' => $product_name,
												'date' => $date_of_draw,
												'image' => ($rowCustomer['avatar'] ? validate_image($rowCustomer['avatar']) : BASE_URL . 'assets/img/avatar.png')
											];
										}
									}
								}
							}

							foreach ($winners as $winner) {
					?>
								<a href="/campanha/<?php echo $row['slug']; ?>">
									<div class="ganhadorItem_ganhadorContainer__1Sbxm mb-2">
										<div class="ganhadorItem_ganhadorFoto__324kH box-shadow-08">
											<div style="display:block;overflow:hidden;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;margin:0">
												<img alt="<?php echo $winner['product']; ?> ganhador do prêmio <?php echo $winner['product']; ?>" src="<?php echo $winner['image']; ?>" decoding="async" data-nimg="fill" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%;object-fit: cover;">
												<noscript>
													<img alt="<?php echo $draw_name; ?> ganhador do prêmio <?php echo $winner['product']; ?>" src="<?php echo $winner['image']; ?>" decoding="async" data-nimg="fill" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%;object-fit: cover;" loading="lazy" />
												</noscript>
											</div>
										</div>
										<div class="undefined w-100">
											<h3 class="ganhadorItem_ganhadorNome__2j_J-" style="text-transform: uppercase;"><?php echo $winner['name']; ?></h3>
											<div class="ganhadorItem_ganhadorDescricao__Z4kO2">
												<p class="mb-0" style="text-transform:uppercase;"><b><?php echo $winner['product']; ?></b></p>
												<p class="mb-0">Número da sorte <b><?php echo $winner['number']; ?></b></p>
												<p class="mb-0">Data da premiação <b><?php echo $winner['date']; ?></b></p>
											</div>
										</div>
									</div>
								</a>
					<?php
							}
						}
					}
					?>
				</div>
			</div>
		</div>
	<?php
	}
	// Ganhadores da Roleta — agrupados por sorteio
	?>

<?php
// Buscar todos os produtos com roleta ativa e prêmios configurados
$_rq_products = $conn->query("SELECT id, name, slug, image_path, roleta_premios FROM product_list WHERE roleta = 1 AND roleta_premios IS NOT NULL AND roleta_premios != '' ORDER BY id DESC");

$_roleta_home_winners = [];

if ($_rq_products && $_rq_products->num_rows > 0) {
    while ($_rp = $_rq_products->fetch_assoc()) {
        $_premios_json = $_rp['roleta_premios'];
        $_premios_arr = json_decode(html_entity_decode($_premios_json), true);
        if (!is_array($_premios_arr)) $_premios_arr = json_decode($_premios_json, true);
        if (!is_array($_premios_arr) || empty($_premios_arr)) continue;

        // Mapa cota (normalizada) => premio
        $_cmap = [];
        foreach ($_premios_arr as $_pi) {
            $_cc = trim($_pi['cota'] ?? '');
            $_pp = trim($_pi['premio'] ?? '');
            if ($_cc !== '') $_cmap[(string)(int)$_cc] = $_pp;
        }
        if (empty($_cmap)) continue;

        // Buscar pedidos pagos deste produto
        $_pid = $conn->real_escape_string($_rp['id']);
        $_rw = $conn->query("SELECT o.order_numbers, o.date_updated, c.firstname, c.lastname FROM order_list o INNER JOIN customer_list c ON c.id = o.customer_id WHERE o.product_id = '$_pid' AND o.status = 2 AND o.order_numbers IS NOT NULL AND o.order_numbers != '' ORDER BY o.date_updated DESC");
        
        $_winners_prod = [];
        if ($_rw) {
            while ($_wo = $_rw->fetch_assoc()) {
                foreach (explode(',', $_wo['order_numbers']) as $_n) {
                    $_ni = (string)(int)trim($_n);
                    if (isset($_cmap[$_ni])) {
                        $_winners_prod[] = [
                            'firstname' => $_wo['firstname'],
                            'lastname'  => $_wo['lastname'],
                            'premio'    => $_cmap[$_ni],
                            'data'      => $_wo['date_updated'],
                            'cota'      => $_ni,
                        ];
                    }
                }
            }
        }

        if (!empty($_winners_prod)) {
            $_roleta_home_winners[] = [
                'product_name' => $_rp['name'],
                'product_slug' => $_rp['slug'],
                'product_image' => $_rp['image_path'],
                'winners' => $_winners_prod,
            ];
        }
    }
}

if (!empty($_roleta_home_winners)):
?>
	<div class="app-ganhadores-roleta mb-3">
		<div class="col-12">
			<div class="app-title">
				<h1>🎡 Ganhadores da Roleta</h1>
				<div class="app-title-desc">premiados instantâneos</div>
			</div>
		</div>

		<div class="col-12">
			<?php foreach ($_roleta_home_winners as $_rhw): ?>
			<div class="mb-3" style="border:1px solid rgba(40,63,151,0.12); border-radius:16px; background:linear-gradient(135deg,#f8faff 0%,#eef2ff 100%); overflow:hidden;">
				<!-- Header do sorteio -->
				<div style="display:flex;align-items:center;gap:10px;padding:14px 16px;border-bottom:1px solid rgba(40,63,151,0.10);background:rgba(40,63,151,0.04);">
					<div style="width:40px;height:40px;border-radius:10px;background:linear-gradient(135deg,#283f97,#4a63d2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
						<span style="color:#fff;font-size:1.1rem;">🎰</span>
					</div>
					<div style="flex:1;min-width:0;">
						<div style="font-weight:700;font-size:0.88rem;color:#1a2a6c;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
							<?= htmlspecialchars($_rhw['product_name']) ?>
						</div>
						<div style="font-size:0.72rem;color:#666;margin-top:1px;">
							<?= count($_rhw['winners']) ?> ganhador(es)
						</div>
					</div>
				</div>
				<!-- Lista de ganhadores -->
				<div style="padding:10px 14px;display:flex;flex-direction:column;gap:8px;max-height:300px;overflow-y:auto;">
					<?php foreach ($_rhw['winners'] as $_wn):
						$_fn = ucwords(strtolower($_wn['firstname']));
						$_ln = ucwords(strtolower($_wn['lastname']));
						$_nm = $_fn . ' ' . $_ln;
						$_dt = $_wn['data'] ? date('d/m/Y H:i', strtotime($_wn['data'])) : '';
					?>
					<div style="display:flex;align-items:center;gap:10px;background:#fff;border-radius:10px;padding:8px 12px;box-shadow:0 1px 4px rgba(40,63,151,0.07);">
						<div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#283f97,#4a63d2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
							<span style="color:#fff;font-weight:800;font-size:0.85rem;"><?= mb_substr($_fn,0,1) ?></span>
						</div>
						<div style="flex:1;min-width:0;">
							<div style="font-weight:700;font-size:0.82rem;color:#1a2a6c;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
								<?= htmlspecialchars($_nm) ?>
								<span style="margin-left:6px;font-size:0.72rem;background:#e8f5e9;color:#2e7d32;border-radius:20px;padding:2px 8px;font-weight:600;">🏆 <?= htmlspecialchars($_wn['premio']) ?></span>
							</div>
							<div style="font-size:0.7rem;color:#aaa;margin-top:1px;">Cota: <b><?= htmlspecialchars($_wn['cota']) ?></b></div>
							<?php if ($_dt): ?><div style="font-size:0.7rem;color:#888;margin-top:0;"><?= $_dt ?></div><?php endif; ?>
						</div>
						<span style="font-size:1.1rem;flex-shrink:0;">🎉</span>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>

	<?php
	// Perguntas frequentes
	?>
	<style>
		.pergunta-item{
			cursor: pointer;
		}
	</style>
	<div class="app-perguntas">
		<div class="app-title">
			<h1>🙋🏼 Perguntas frequentes</h1>
		</div>
		<div id="perguntas-box">
			<?php if (!!$_settings->info('question1') && !!$_settings->info('answer1')): ?>
				<div class="mb-2">
					<div class="pergunta-item d-flex flex-column p-2 bg-card box-shadow-08 rounded-10 font-weight-500 font-xs">
						<div class="pergunta-item--pergunta collapsed" data-bs-toggle="collapse" data-bs-target="#pergunta-63c30d4b6bd40368220230114" aria-expanded="false" aria-controls="pergunta-63c30d4b6bd40368220230114">
							<i class="bi bi-arrow-right me-2 incrivel-primariaLink"></i>
							<span><?php echo $_settings->info('question1'); ?></span>
						</div>
						<div class="d-block">
							<div class="pergunta-item--resp mt-1 collapse" id="pergunta-63c30d4b6bd40368220230114" data-bs-parent="#perguntas-box">
								<p class="mb-0"><?php echo $_settings->info('answer1'); ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if (!!$_settings->info('question2') && !!$_settings->info('answer2')): ?>
				<div class="mb-2">
					<div class="pergunta-item d-flex flex-column p-2 bg-card box-shadow-08 rounded-10 font-weight-500 font-xs">
						<div class="pergunta-item--pergunta collapsed" data-bs-toggle="collapse" data-bs-target="#pergunta-1" aria-expanded="false" aria-controls="pergunta-1">
							<i class="bi bi-arrow-right me-2 incrivel-primariaLink"></i>
							<span><?php echo $_settings->info('question2'); ?></span>
						</div>
						<div class="d-block">
							<div class="pergunta-item--resp mt-1 collapse" id="pergunta-1" data-bs-parent="#perguntas-box">
								<p class="mb-0"><?php echo $_settings->info('answer2'); ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if (!!$_settings->info('question3') && !!$_settings->info('answer3')): ?>
				<div class="mb-2">
					<div class="pergunta-item d-flex flex-column p-2 bg-card box-shadow-08 rounded-10 font-weight-500 font-xs">
						<div class="pergunta-item--pergunta collapsed" data-bs-toggle="collapse" data-bs-target="#pergunta-2" aria-expanded="false" aria-controls="pergunta-2">
							<i class="bi bi-arrow-right me-2 incrivel-primariaLink"></i>
							<span><?php echo $_settings->info('question3'); ?></span>
						</div>
						<div class="d-block">
							<div class="pergunta-item--resp mt-1 collapse" id="pergunta-2" data-bs-parent="#perguntas-box">
								<p class="mb-0"><?php echo $_settings->info('answer3'); ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if (!!$_settings->info('question4') && !!$_settings->info('answer4')): ?>
				<div class="mb-2">
					<div class="pergunta-item d-flex flex-column p-2 bg-card box-shadow-08 rounded-10 font-weight-500 font-xs">
						<div class="pergunta-item--pergunta collapsed" data-bs-toggle="collapse" data-bs-target="#pergunta-3" aria-expanded="false" aria-controls="pergunta-3">
							<i class="bi bi-arrow-right me-2 incrivel-primariaLink"></i>
							<span><?php echo $_settings->info('question4'); ?></span>
						</div>
						<div class="d-block">
							<div class="pergunta-item--resp mt-1 collapse" id="pergunta-3" data-bs-parent="#perguntas-box">
								<p class="mb-0"><?php echo $_settings->info('answer4'); ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if ($enable_password == 1): ?>
				<div class="mb-2">
					<div class="pergunta-item d-flex flex-column p-2 bg-card box-shadow-08 rounded-10 font-weight-500 font-xs">
						<div class="pergunta-item--pergunta collapsed" data-bs-toggle="collapse" data-bs-target="#pergunta-4" aria-expanded="false" aria-controls="pergunta-4">
							<i class="bi bi-arrow-right me-2 incrivel-primariaLink"></i>
							<span>Esqueci minha senha, como faço?</span>
						</div>
						<div class="d-block">
							<div class="pergunta-item--resp mt-1 collapse" id="pergunta-4" data-bs-parent="#perguntas-box">
								<p class="mb-0">Você consegue recuperar sua senha indo no menu do site, depois em "Entrar" e logo a baixo tem "Esqueci minha senha".</p>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Fim perguntas frequentes -->
<?php
