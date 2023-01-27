	<div class="pageMain__bottom card" style="background: transparent;">
		<div class="container">
			<div class="pageMain__bottom-description">Здесь можно рассчитать рыночную стоимость юридических услуг для обоснования разумности понесенных расходов на юристов в суде при взыскании их с проигравшей стороны. Либо проверить разумность заявляемых ко взысканию расходов оппонентами.</div>
			<div class="formcalc">
				<div class="calcform-select" data-cc-type="calculation-year-dropdown-container" style="display:none;" data-cc-step=0>
					<select data-cc-type="calculation-year-dropdown" data-cc-next="calculation-city-dropdown">
						<option value="" disabled selected>Укажите год</option>
					</select>
				</div>
				<div class="calcform-select" data-cc-type="calculation-city-dropdown-container" data-cc-step=1  style="display:none;">
					<select data-cc-type="calculation-city-dropdown" data-cc-next="calculation-choise" >
						<option value="" disabled selected>Регион</option>
					</select>
				</div>
				<div data-cc-type="calculation-choise-container" style="display:none;" data-cc-step=2>
					<div class="calcform-title">Выберите формат оплаты</div>
					<div class="inpfield" data-cc-type="calculation-choise-inpfield" data-cc-name="fc">
						<input type="checkbox" id="cb1" data-cc-type="calculation-choise" data-cc-name="fc" data-cc-next="calculation-court-dropdown"> <label for="cb1"><div class="labelCalc">Фиксированная за весь процесс/по инстанциям</div></label>
						<div class="mainCalc-item__tooltip tooltip"><img class="img" src="/bitrix/templates/main/img/gu-calc.svg" alt="">
						  <div class="tooltip-text">
							Для расчетов выбирается категория дела, количество заседаний в соответствующих инстанциях и необходимость усложняющих коэффициентов. В зависимости от региона и года, все данные подставляются в формулу:
							<br>
							<br>S = (A1 * B1 + A2 * B2 + A3 * B3) * Q (если Q ≠ 0)
							<br>при Q = (1 + q1) * (1 + q2) * (1 + q3) * (1 + q3) * (1 + q5),
							<br>где S — определяемая стоимость услуг, An — количество раз рассмотрения дела
							<br>в одной и той же инстанции (1 — первая, 2 — апелляция, 3 — кассация), Bn — средняя стоимость услуг в соответствующей инстанции (1 — первая, 2 —апелляция, 3 — кассация); q — повышающий коэффициент сложности, qn — один из пяти повышающих коэффициентов.
						  </div>
						</div>
					</div>
					<!--<div class="inpfield">
						<input type="checkbox" id="cb2" data-cc-type="calculation-choise" data-cc-name="dc"> <label for="cb2"><div class="labelCalc">За подготовку процессуальных документов</div></label>
						<div class="mainCalc-item__tooltip tooltip"><img class="img" src="/bitrix/templates/main/img/gu-calc.svg" alt="">
						  <div class="tooltip-text">В зависимости от региона, года и типа суда в расчет идет средняя стоимость подготовки документов разных категорий.</div>
						</div>
					</div>-->
					<div class="inpfield" data-cc-type="calculation-choise-inpfield" data-cc-name="sf">
						<input type="checkbox" id="cb3" data-cc-type="calculation-choise" data-cc-name="sf" data-cc-next="calculation-court-dropdown"> <label for="cb3"><div class="labelCalc">При выплате гонорара успеха</div></label>
						<div class="mainCalc-item__tooltip tooltip"><img class="img" src="/bitrix/templates/main/img/gu-calc.svg" alt="">
						  <div class="tooltip-text">
							В зависимости от региона, года, типа суда и категории дела, расчет гонорара успеха  производится по следующей формуле: 
							<br>
							<br>S = ∑ * G II (если оплата только из гонорара успеха)
							<br>где:
							<br>S — определяемая стоимость услуг, 
							<br>S1 — стоимость услуг фиксированная (рассчитана по предыдущим формулам), 
							<br>∑ — сумма иска, 
							<br>G II — ставка гонорара успеха (по категориям) при оплате
							<br>только гонораром.
						  </div>
						</div>
					</div>
		
					<div class="inpfield" data-cc-type="calculation-choise-inpfield" data-cc-name="ac">
						<input type="checkbox" id="cb4" data-cc-type="calculation-choise" data-cc-name="ac" data-cc-next="calculation-other-info"> <label for="cb4"><div class="labelCalc">Стоимость услуг по действиям</div></label>
						<div class="mainCalc-item__tooltip tooltip"><img class="img" src="/bitrix/templates/main/img/gu-calc.svg" alt="">
						  <div class="tooltip-text">В зависимости от региона и года в расчет идет средняя стоимость подготовки документов разных категорий и средняя стоимость одного судебного заседания.</div>
						</div>
					</div>

					<div class="inpfield" data-cc-type="calculation-choise-inpfield" data-cc-name="phc">
						<input type="checkbox" id="cb5" data-cc-type="calculation-choise" data-cc-name="phc" data-cc-next="calculation-post"> <label for="cb5"><div class="labelCalc">Почасовая ставка</div></label>
						<div class="mainCalc-item__tooltip tooltip"><img class="img" src="/bitrix/templates/main/img/gu-calc.svg" alt="">
						  <div class="tooltip-text">
							Для расчетов выбирается статус и указывается количество подтвержденных часов. В зависимости от региона, года все данные подставляются в формулу:
							<br>
							<br>S = X * H,
							<br>где S — определяемая стоимость услуг, X — часовая ставка юриста/адвоката, H — количество затраченных часов (подтвержденных).
	
						  </div>
						</div>
					</div>
                    
					<div class="inpfield" data-cc-type="calculation-choise-inpfield" data-cc-name="asf" >
						<input type="checkbox" id="cb6" data-cc-type="calculation-choise" data-cc-name="asf" data-cc-next="calculation-court-dropdown"> <label for="cb6"><div class="labelCalc">Гонорар успеха дополнительно к <br>основной оплате</div></label>
						<div class="mainCalc-item__tooltip tooltip"><img class="img" src="/bitrix/templates/main/img/gu-calc.svg" alt="">
						  <div class="tooltip-text">
							В зависимости от региона, года, типа суда и категории дела, расчет гонорара успеха (дополнительного к основной оплате) производится по следующей формуле: 
	
							<br>S = S1 + ∑ * G I
							<br>где:
							<br>S — определяемая стоимость услуг, 
							<br>S1 — стоимость услуг фиксированная (рассчитана по предыдущим формулам), ∑ — сумма иска, 
							<br>G I — ставка дополнительного гонорара успеха (по категориям).
						  </div>
						</div>
					</div>
				</div>

				<!-- fixed costs -->
				<div data-cc-type="calculation-container" data-cc-name="fc" style="display:none;" data-cc-step=3>
					<div class="calcform-select" data-cc-type="calculation-court-dropdown-container" data-cc-name="fc" style="display:none;" data-cc-step=3>
						<select data-cc-type="calculation-court-dropdown" data-cc-name="fc" data-cc-next="calculation-category-dropdown">
							<option value="" disabled selected>Суд</option>
						</select>
					</div>
					<div class="calcform-select" data-cc-type="calculation-category-dropdown-container" data-cc-name="fc" style="display:none;" data-cc-step=4>
						<select data-cc-type="calculation-category-dropdown" data-cc-name="fc" data-cc-next="calculation-other-info">
							<option value="" disabled selected>Категория спора</option>
						</select>
					</div>
					<div data-cc-type="calculation-other-info-container" data-cc-name="fc" style="display:none;" data-cc-step=5>
						<div class="calcform-title">Инстанции</div>
						
						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="inst1" value="Первая инстанция" data-cc-type="calculation-instance-checkbox" data-cc-name="fc"  data-cc-counter=1> 
								<label for="inst1">
									<div class="labelCalc">Первая инстанция</div>
								</label>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="fc" data-cc-counter=1 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="fc" data-cc-counter=1>
								<span></span>
							</div>
						</div>
						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="inst2" value="Апелляционная инстация" data-cc-type="calculation-instance-checkbox" data-cc-name="fc" data-cc-counter=2> 
								<label for="inst2">
									<div class="labelCalc">Апелляционная инстанция</div>
								</label>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="fc" data-cc-counter=2 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="fc" data-cc-counter=2>
								<span></span>
							</div>
						</div>
						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="inst3" value="Кассационная инстация" data-cc-type="calculation-instance-checkbox" data-cc-name="fc" data-cc-counter=3> 
								<label for="inst3">
									<div class="labelCalc">Кассационная инстанция</div>
								</label>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="fc" data-cc-counter=3 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="fc" data-cc-counter=3>
								<span></span>
							</div>
						</div>
	
						
						<div class="calcform-title">Характеристики дела</div>
						<div class="calcform-subtitle">Показатели, усложняющие дело и повышающие цену услуг юристов</div>
						
						<div class="inpfield red">
							<input type="checkbox" id="df1" data-cc-type="calculation-difficulty-factor" data-cc-name="fc" value="Отсутствие единообразной практики по данной категории дел"> 
							<label for="df1"><div class="labelCalc">Отсутствие единообразной практики по данному делу</div></label>
						</div>
						<div class="inpfield red">
							<input type="checkbox" id="df2" data-cc-type="calculation-difficulty-factor" data-cc-name="fc" value="Сумма иска выше 10 млн рублей"> 
							<label for="df2"><div class="labelCalc">Сумма иска выше 100 млн руб.</div></label>
						</div>
						<div class="inpfield red">
							<input type="checkbox" id="df3" data-cc-type="calculation-difficulty-factor" data-cc-name="fc" value="Значительное количество участников в судебном процессе"> 
							<label for="df3"><div class="labelCalc">Значительное количество участников в судебном процессе</div></label>
						</div>
						<div class="inpfield red">
							<input type="checkbox" id="df4" data-cc-type="calculation-difficulty-factor" data-cc-name="fc" value="Значительное количество предполагаемых процессуальных действий"> 
							<label for="df4"><div class="labelCalc">Значительное количество предполагаемых процессуальных действий</div></label>
						</div>
						<div class="inpfield red">
							<input type="checkbox" id="df5" data-cc-type="calculation-difficulty-factor" data-cc-name="fc" value="Необходимость сложных расчётов при наличии большого количества первичных документов"> 
							<label for="df5"><div class="labelCalc">Необходимость сложных рассчетов</div></label>
						</div>
			
						<button class="btn-calc" data-cc-type="calculate" data-cc-name="fc">Рассчитать</button>
					</div>
				</div>

				<!-- documents costs -->
				<div data-cc-type="calculation-container" data-cc-name="dc" style="display:none;" data-cc-step=3>
					<div data-cc-type="calculation-other-info-container" data-cc-name="dc" style="display:none;" data-cc-step=3>
						<div class="calcform-select" data-cc-type="calculation-fixed-court-dropdown-container" data-cc-name="dc">
							<select data-cc-type="calculation-fixed-court-dropdown" data-cc-name="dc">
								<option value="" disabled selected>Суд</option>
								<option value="Арбитражный суд" >Арбитражный суд</option>
								<option value="Суды общей юрисдикции" >Суды общей юрисдикции</option>
							</select>
						</div>

						
						<div class="calcform-title">Документы</div>

						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="doc1" value="Подготовка искового заявления" data-cc-type="calculation-instance-checkbox" data-cc-name="dc"  data-cc-counter=1> 
								<label for="doc1">
									<div class="labelCalc">Подготовка искового заявления</div>

								</label>
								<div class="mainCalc-item__tooltip tooltip"><img class="img" src="/bitrix/templates/main/img/gu-calc.svg" alt="">
								  <div class="tooltip-text">Исковое заявление, заявление об оспаривании актов (действия или бездействия) государственных или муниципальных органов, постановлений административных органов или отзывов (возражений) на такие документы</div>
								</div>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="dc" data-cc-counter=1 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="dc" data-cc-counter=1>
								<span></span>
							</div>
						</div>
						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="doc2" value="Подготовка апелляционной, кассационной жалобы" data-cc-type="calculation-instance-checkbox" data-cc-name="dc" data-cc-counter=2> 
								<label for="doc2">
									<div class="labelCalc">Подготовка апелляционной, <br>кассационной жалобы</div>
								</label>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="dc" data-cc-counter=2 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="dc" data-cc-counter=2>
								<span></span>
							</div>
						</div>
						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="doc3" value="Подготовка иных документов" data-cc-type="calculation-instance-checkbox" data-cc-name="dc" data-cc-counter=3> 
								<label for="doc3">
									<div class="labelCalc">Подготовка иных документов</div>
								</label>
								<div class="mainCalc-item__tooltip tooltip"><img class="img" src="/bitrix/templates/main/img/gu-calc.svg" alt="">
								  <div class="tooltip-text">Иные документы, связанные с представлением интересов заказчика в суде (различные ходатайства, заявления об изменении предмета или основания иска, мирового соглашения, и т.п.)</div>
								</div>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="dc" data-cc-counter=3 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="dc" data-cc-counter=3>
								<span></span>
							</div>
						</div>

						<button class="btn-calc" data-cc-type="calculate" data-cc-name="dc">Рассчитать</button>
					</div>
				</div>


				<!-- success fee -->
				<div data-cc-type="calculation-container" data-cc-name="sf" style="display:none;" data-cc-step=3>
					<div class="calcform-select" data-cc-type="calculation-court-dropdown-container" data-cc-name="sf" style="display:none;" data-cc-step=3>
						<select data-cc-type="calculation-court-dropdown" data-cc-name="sf" data-cc-next="calculation-category-dropdown">
							<option value="" disabled selected>Суд</option>
						</select>
					</div>
					<div class="calcform-select" data-cc-type="calculation-category-dropdown-container" data-cc-name="sf" style="display:none;" data-cc-step=4>
						<select data-cc-type="calculation-category-dropdown" data-cc-name="sf" data-cc-next="calculation-other-info">
							<option value="" disabled selected>Категория спора</option>
						</select>
					</div>
					<div data-cc-type="calculation-other-info-container" data-cc-name="sf" style="display:none;" data-cc-step=5>
						<div class="free_numfield" data-cc-type="calculation-claim-sum-container" data-cc-name="sf">
							<input placeholder="Сумма иска" type="number" class="input-text qty text" data-cc-type="calculation-claim-sum" data-cc-name="sf" data-cc-numformat>
						</div>
						<button class="btn-calc" data-cc-type="calculate" data-cc-name="sf">Рассчитать</button>
					</div>
				</div>


				<!-- actions costs -->
				<div data-cc-type="calculation-container" data-cc-name="ac" style="display:none;" data-cc-step=3>
					<div data-cc-type="calculation-other-info-container" data-cc-name="ac" style="display:none;" data-cc-step=3>
						<div class="calcform-select" data-cc-type="calculation-fixed-court-dropdown-container" data-cc-name="ac">
							<select data-cc-type="calculation-fixed-court-dropdown" data-cc-name="ac">
								<option value="" disabled selected>Суд</option>
								<option value="Арбитражный суд" >Арбитражный суд</option>
								<option value="Суды общей юрисдикции" >Суды общей юрисдикции</option>
							</select>
						</div>

						
						<div class="calcform-title">Документы</div>

						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="act1" value="Подготовка искового заявления" data-cc-type="calculation-instance-checkbox" data-cc-name="ac"  data-cc-counter=1> 
								<label for="act1">
									<div class="labelCalc">Подготовка искового заявления</div>
								</label>
								<div class="mainCalc-item__tooltip tooltip"><img class="img" src="/bitrix/templates/main/img/gu-calc.svg" alt="">
								  <div class="tooltip-text">Исковое заявление, заявление об оспаривании актов (действия или бездействия) государственных или муниципальных органов, постановлений административных органов или отзывов (возражений) на такие документы</div>
								</div>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="ac" data-cc-counter=1 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="ac" data-cc-counter=1>
								<span></span>
							</div>
						</div>
						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="act2" value="Подготовка апелляционной, кассационной жалобы" data-cc-type="calculation-instance-checkbox" data-cc-name="ac" data-cc-counter=2> 
								<label for="act2">
									<div class="labelCalc">Подготовка апелляционной, кассационной жалобы</div>
								</label>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="ac" data-cc-counter=2 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="ac" data-cc-counter=2>
								<span></span>
							</div>
						</div>
						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="act3" value="Подготовка иных документов" data-cc-type="calculation-instance-checkbox" data-cc-name="ac" data-cc-counter=3> 
								<label for="act3">
									<div class="labelCalc">Подготовка иных документов</div>
								</label>
								<div class="mainCalc-item__tooltip tooltip"><img class="img" src="/bitrix/templates/main/img/gu-calc.svg" alt="">
								  <div class="tooltip-text">Иные документы, связанные с представлением интересов заказчика в суде (различные ходатайства, заявления об изменении предмета или основания иска, мирового соглашения, и т.п.)</div>
								</div>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="ac" data-cc-counter=3 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="ac" data-cc-counter=3>
								<span></span>
							</div>
						</div>
						<div class="free_numfield" data-cc-type="calculation-court-count-container" data-cc-name="ac">
							<input placeholder="Количество судебных заседаний" type="number" class="input-text qty text" data-cc-type="calculation-court-count" data-cc-name="ac">
						</div>
						<button class="btn-calc" data-cc-type="calculate" data-cc-name="ac">Рассчитать</button>
					</div>
				</div>


				<!-- per hour costs -->
				<div data-cc-type="calculation-container" data-cc-name="phc" style="display:none;" data-cc-step=3>
					<div data-cc-type="calculation-post-container" data-cc-name="phc" style="display:none;" data-cc-step=3>
						<div class="calcform-title">Должности</div>
						<div data-cc-type="calculation-post-checkboxes-container" data-cc-name="phc">
						</div>
						<button class="btn-calc" data-cc-type="calculate" data-cc-name="phc">Рассчитать</button>
					</div>
				</div>


				<!-- additional success fee -->
				<div data-cc-type="calculation-container" data-cc-name="asf" style="display:none;" data-cc-step=3>
					<div class="calcform-select" data-cc-type="calculation-court-dropdown-container" data-cc-name="asf" style="display:none;" data-cc-step=3>
						<select data-cc-type="calculation-court-dropdown" data-cc-name="asf" data-cc-next="calculation-category-dropdown">
							<option value="" disabled selected>Суд</option>
						</select>
					</div>
					<div class="calcform-select" data-cc-type="calculation-category-dropdown-container" data-cc-name="asf" style="display:none;" data-cc-step=4>
						<select data-cc-type="calculation-category-dropdown" data-cc-name="asf" data-cc-next="calculation-other-info">
							<option value="" disabled selected>Категория спора</option>
						</select>
					</div>
					<div data-cc-type="calculation-other-info-container" data-cc-name="asf" style="display:none;" data-cc-step=5>
						<div class="free_numfield" data-cc-type="calculation-claim-sum-container" data-cc-name="sf">
							<input placeholder="Сумма иска" type="number" class="input-text qty text" data-cc-type="calculation-claim-sum" data-cc-name="asf" data-cc-numformat>
						</div>
						<div class="calcform-title">Инстанции</div>
						
						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="asfinst1" value="Первая инстанция" data-cc-type="calculation-instance-checkbox" data-cc-name="asf"  data-cc-counter=1> 
								<label for="asfinst1">
									<div class="labelCalc">Первая инстанция</div>
								</label>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="asf" data-cc-counter=1 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="asf" data-cc-counter=1>
								<span></span>
							</div>
						</div>
						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="asfinst2" value="Апелляционная инстация" data-cc-type="calculation-instance-checkbox" data-cc-name="asf" data-cc-counter=2> 
								<label for="asfinst2">
									<div class="labelCalc">Апелляционная инстанция</div>
								</label>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="asf" data-cc-counter=2 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="asf" data-cc-counter=2>
								<span></span>
							</div>
						</div>
						<div class="numfield-row">
							<div class="inpfield red">
								<input type="checkbox" id="asfinst3" value="Кассационная инстация" data-cc-type="calculation-instance-checkbox" data-cc-name="asf" data-cc-counter=3> 
								<label for="asfinst3">
									<div class="labelCalc">Кассационная инстанция</div>
								</label>
							</div>
							<div class="numfield" data-cc-type="calculation-instance-counter-container" data-cc-name="asf" data-cc-counter=3 style="display:none;">
								<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-instance-counter" data-cc-name="asf" data-cc-counter=3>
								<span></span>
							</div>
						</div>
	
						
						<div class="calcform-title">Характеристики дела</div>
						<div class="calcform-subtitle">Показатели, усложняющие дело и повышающие цену услуг юристов</div>
						
						<div class="inpfield red">
							<input type="checkbox" id="asfcb5" data-cc-type="calculation-difficulty-factor" data-cc-name="asf" value="Отсутствие единообразной практики по данной категории дел"> 
							<label for="asfcb5"><div class="labelCalc">Отсутствие единообразной практики по данному делу</div></label>
						</div>
						<div class="inpfield red">
							<input type="checkbox" id="asfcb6" data-cc-type="calculation-difficulty-factor" data-cc-name="asf" value="Сумма иска выше 10 млн рублей"> 
							<label for="asfcb6"><div class="labelCalc">Сумма иска выше 100 млн руб.</div></label>
						</div>
						<div class="inpfield red">
							<input type="checkbox" id="asfcb7" data-cc-type="calculation-difficulty-factor" data-cc-name="asf" value="Значительное количество участников в судебном процессе"> 
							<label for="asfcb7"><div class="labelCalc">Значительное количество участников в судебном процессе</div></label>
						</div>
						<div class="inpfield red">
							<input type="checkbox" id="asfcb8" data-cc-type="calculation-difficulty-factor" data-cc-name="asf" value="Значительное количество предполагаемых процессуальных действий"> 
							<label for="asfcb8"><div class="labelCalc">Значительное количество предполагаемых процессуальных действий</div></label>
						</div>
						<div class="inpfield red">
							<input type="checkbox" id="asfcb9" data-cc-type="calculation-difficulty-factor" data-cc-name="asf" value="Необходимость сложных расчётов при наличии большого количества первичных документов"> 
							<label for="asfcb9"><div class="labelCalc">Необходимость сложных рассчетов</div></label>
						</div>

						<button class="btn-calc" data-cc-type="calculate" data-cc-name="asf">Рассчитать</button>
					</div>
				</div>


			</div>
		</div>

	</div>
</main>



<section class="tab-result" id="results-section" style="display:none;">
	<div class="container"> 
		<h2>Результат</h2>
		<div class="pageCalculator-flex">
			<div class="pageCalculator__tabs">
			
					<ul class="pageCalculator__tabs-list" data-cc-type="calculation-results">
					</ul>
				<div class="pageCalculator__tabs-warn">Чтобы посмотреть описание квалификационной группы и подробности расчета — кликните на результат.</div>
			</div>
			<div class="pageCalculator__right">

				<div class="pageCalculator__content" data-cc-type="result-info-container">
				</div>


			</div>
		</div>

	</div>
</section>
<section class="calc-about">
		<div class="container">
			<h2>О калькуляторе</h2>
			<p>
			Калькулятор поможет вам взыскать расходы, понесённые на юристов в суде, с проигравшей стороны спора. Цены, указанные в калькуляторе, могут быть представлены суду при обосновании разумного уровня расходов на юридические услуги. </p>
			<p>
			Расчёт основан на результатах <a href="#">ежегодного исследования стоимости услуг по представлению интересов в суде</a>, проводимого Экспертной группой Veta совместно с Федеральной палатой адвокатов. Калькулятор учитывает основные факторы и региональный уровень цен. Подробнее про исследование можно прочитать <a href="#">здесь</a>.</p>
		</div>
	</section>
	
	
<div class="popupForm hide" id="requestPrint">
	<div class="popupForm-title">
		 Запросить печатный экземпляр исследования
	</div>
	<form action="" method="post" enctype="multipart/form-data">
 <input type="text" name="name" placeholder="Как вас зовут" required=""> <input type="tel" name="phone" placeholder="Ваш телефон" required=""> <input type="email" name="mail" placeholder="Ваш e-mail" required=""> <input type="text" name="company" placeholder="Название вашей компании" required=""> <input type="hidden" name="nameForm" value="Запрос печатного экземпляра исследования"> <input type="hidden" name="url" value="https://veta.expert/projects/research/">
		<div class="popupForm-select">
			<select name="proff" required="">
				<option value="" disabled="" selected="">Ваша должность</option>
				<option value="Юрист">Юрист</option>
				<option value="Директор">Директор</option>
				<option value="Финансист">Финансист</option>
				<option value="Бухгалтер">Бухгалтер</option>
				<option value="Технический специалист">Технический специалист</option>
				<option value="Менеджер">Менеджер</option>
				<option value="Журналист">Журналист</option>
				<option value="Другое">Другое</option>
			</select>
		</div>
 <textarea name="message" placeholder="Оставьте свой комментарий" required=""></textarea>
		<div class="popupForm-checkbox">
 <input type="checkbox" value="да" name="pers" required=""> <label>Соглашаюсь на <a href="/law/">обработку персональных данных</a></label>
		</div>
		<div class="popupForm-checkbox">
 <input type="checkbox" value="да" name="letter" required=""> <label>Соглашаюсь получать рассылку от экспертной группы Veta</label>
		</div>
 <button class="popupForm-btn btn-red">Отправить запрос</button>
	</form>
</div>
 <!-- конец попап запрос печатого экз. --> <!-- попап запрос на участие в исследовании -->
<div class="popupForm hide" id="requestResearch">
	<div class="popupForm-title">
		Запросить справку для предоставления в суд
	</div>
	<form action="" method="post" enctype="multipart/form-data">
 <input type="text" name="name" placeholder="Как вас зовут" required=""> <input type="tel" name="phone" placeholder="Ваш телефон" required=""> <input type="email" name="mail" placeholder="Ваш e-mail" required=""> <input type="text" name="company" placeholder="Название вашей компании" required=""> <input type="hidden" name="nameForm" value="Запросить справку для предоставления в суд"> <input type="hidden" name="url" value="https://veta.expert/legalcalc/">
		<div class="popupForm-select">
			<select name="regionhand" required="">
				<option value="" disabled="" selected="">Ваш регион</option>
				<option value="Москва и МО">Москва и МО</option>
				<option value="СПб и Ленобласть">СПб и Ленобласть</option>
				<option value="Севастополь и Крым">Севастополь и Крым</option>
				<option value="Майкоп и Адыгея">Майкоп и Адыгея</option>
				<option value="Горно-Алтайск и Алтай">Горно-Алтайск и Алтай</option>
				<option value="Уфа и Башкортостан">Уфа и Башкортостан</option>
				<option value="Улан-Удэ и Бурятия">Улан-Удэ и Бурятия</option>
				<option value="Махачкала и Дагестан">Махачкала и Дагестан</option>
				<option value="Магас и Ингушетия">Магас и Ингушетия</option>
				<option value="Нальчик и Кабардино-Балкария">Нальчик и Кабардино-Балкария</option>
				<option value="Элиста и Калмыкия">Элиста и Калмыкия</option>
				<option value="Черкесск и Карачаево-Черкесия">Черкесск и Карачаево-Черкесия</option>
				<option value="Петрозаводск и Карелия">Петрозаводск и Карелия</option>
				<option value="Сыктывкар и Коми">Сыктывкар и Коми</option>
				<option value="Йошкар-Ола и Марий Эл">Йошкар-Ола и Марий Эл</option>
				<option value="Саранск и Мордовия">Саранск и Мордовия</option>
				<option value="Якутск и Саха (Якутия)">Якутск и Саха (Якутия)</option>
				<option value="Владикавказ и Северная Осетия">Владикавказ и Северная Осетия</option>
				<option value="Казань и Татарстан">Казань и Татарстан</option>
				<option value="Кызыл и Тыва (Тува)">Кызыл и Тыва (Тува)</option>
				<option value="Ижевск и Удмуртия">Ижевск и Удмуртия</option>
				<option value="Абакан и Хакасия">Абакан и Хакасия</option>
				<option value="Грозный и Чечня">Грозный и Чечня</option>
				<option value="Чебоксары и Чувашия">Чебоксары и Чувашия</option>
				<option value="Барнаул и Алтайский край">Барнаул и Алтайский край</option>
				<option value="Чита и Забайкальский край">Чита и Забайкальский край</option>
				<option value="Петропавловск-Камчатский и Камчатский край">Петропавловск-Камчатский и Камчатский край</option>
				<option value="Краснодар и Краснодарский край">Краснодар и Краснодарский край</option>
				<option value="Красноярск и Красноярский край">Красноярск и Красноярский край</option>
				<option value="Пермь и Пермский край">Пермь и Пермский край</option>
				<option value="Владивосток и Приморский край">Владивосток и Приморский край</option>
				<option value="Ставрополь и Ставропольский край">Ставрополь и Ставропольский край</option>
				<option value="Хабаровск и Хабаровский край">Хабаровск и Хабаровский край</option>
				<option value="Благовещенск и Амурская область">Благовещенск и Амурская область</option>
				<option value="Архангельск и Архангельская область">Архангельск и Архангельская область</option>
				<option value="Астрахань и Астраханская область">Астрахань и Астраханская область</option>
				<option value="Белгород и Белгородская область">Белгород и Белгородская область</option>
				<option value="Брянск и Брянская область">Брянск и Брянская область</option>
				<option value="Владимир и Владимирская область">Владимир и Владимирская область</option>
				<option value="Волгоград и Волгоградская область">Волгоград и Волгоградская область</option>
				<option value="Вологда и Вологодская область">Вологда и Вологодская область</option>
				<option value="Воронеж и Воронежская область">Воронеж и Воронежская область</option>
				<option value="Иваново и Ивановская область">Иваново и Ивановская область</option>
				<option value="Иркутск и Иркутская область">Иркутск и Иркутская область</option>
				<option value="Калининград и Калининградская область">Калининград и Калининградская область</option>
				<option value="Калуга и Калужская область">Калуга и Калужская область</option>
				<option value="Кемерово и Кемеровская область">Кемерово и Кемеровская область</option>
				<option value="Киров и Кировская область">Киров и Кировская область</option>
				<option value="Кострома и Костромская область">Кострома и Костромская область</option>
				<option value="Курган и Курганская область">Курган и Курганская область</option>
				<option value="Курск и Курская область">Курск и Курская область</option>
				<option value="Липецк и Липецкая область">Липецк и Липецкая область</option>
				<option value="Магадан и Магаданская область">Магадан и Магаданская область</option>
				<option value="Мурманск и Мурманская область">Мурманск и Мурманская область</option>
				<option value="Нижний Новгород и Нижегородская область">Нижний Новгород и Нижегородская область</option>
				<option value="Великий Новгород и Новгородская область">Великий Новгород и Новгородская область</option>
				<option value="Новосибирск и Новосибирская область">Новосибирск и Новосибирская область</option>
				<option value="Омск и Омская область">Омск и Омская область</option>
				<option value="Оренбург и Оренбургская область">Оренбург и Оренбургская область</option>
				<option value="Орёл и Орловская область">Орёл и Орловская область</option>
				<option value="Пенза и Пензенская область">Пенза и Пензенская область</option>
				<option value="Псков и Псковская область">Псков и Псковская область</option>
				<option value="Ростов-на-Дону и Ростовская область">Ростов-на-Дону и Ростовская область</option>
				<option value="Рязань и Рязанская область">Рязань и Рязанская область</option>
				<option value="Самара и Самарская область">Самара и Самарская область</option>
				<option value="Саратов и Саратовская область">Саратов и Саратовская область</option>
				<option value="Южно-Сахалинск и Сахалинская область">Южно-Сахалинск и Сахалинская область</option>
				<option value="Екатеринбург и Свердловская область">Екатеринбург и Свердловская область</option>
				<option value="Смоленск и Смоленская область">Смоленск и Смоленская область</option>
				<option value="Тамбов и Тамбовская область">Тамбов и Тамбовская область</option>
				<option value="Тверь и Тверская область">Тверь и Тверская область</option>
				<option value="Томск и Томская область">Томск и Томская область</option>
				<option value="Тула и Тульская область">Тула и Тульская область</option>
				<option value="Тюмень и Тюменская область">Тюмень и Тюменская область</option>
				<option value="Ульяновск и Ульяновская область">Ульяновск и Ульяновская область</option>
				<option value="Челябинск и Челябинская область">Челябинск и Челябинская область</option>
				<option value="Ярославль и Ярославская область">Ярославль и Ярославская область</option>
				<option value="Биробиджан и Еврейская АО">Биробиджан и Еврейская АО</option>
				<option value="Нарьян-Мар и Ненецкий АО">Нарьян-Мар и Ненецкий АО</option>
				<option value="Ханты-Мансийск и Ханты-Мансийский АО">Ханты-Мансийск и Ханты-Мансийский АО</option>
				<option value="Анадырь и Чукотский АО">Анадырь и Чукотский АО</option>
				<option value="Салехард и Ямало-Ненецкий АО">Салехард и Ямало-Ненецкий АО</option>
			</select>
		</div>
		<div class="popupForm-select">
			<select name="proff" required="">
				<option value="" disabled="" selected="">Ваша должность</option>
				<option value="Юрист">Юрист</option>
				<option value="Директор">Директор</option>
				<option value="Финансист">Финансист</option>
				<option value="Бухгалтер">Бухгалтер</option>
				<option value="Технический специалист">Технический специалист</option>
				<option value="Менеджер">Менеджер</option>
				<option value="Журналист">Журналист</option>
				<option value="Другое">Другое</option>
			</select>
		</div>
 <textarea name="message" placeholder="Оставьте свой комментарий" required=""></textarea>
		<div class="popupForm-checkbox">
 <input type="checkbox" value="да" name="pers" required=""> <label>Соглашаюсь на <a href="/law/">обработку персональных данных</a></label>
		</div>
 <button class="popupForm-btn btn-red">Запросить справку</button>
	</form>
</div>
	
	
	
	
<script type="text/javascript">
var curr_calc;
var url_base = "https://calc.damages-anatomy.ru/api/v1/court_costs/";
document.addEventListener('DOMContentLoaded', function(){
  $.ajax({
	url: `${url_base}research_city/get_years/`,
	method: 'get',
	dataType: 'json', 
	success: function(data){
		fill_years_drop_down(data);
		$(`[data-cc-type='calculation-year-dropdown-container']`).slideDown();
	},
	error: function (jqXHR, exception) {
		alert(jqXHR.responseText);
	}
  });


  $("[data-cc-numformat]").each((i,ele)=>{
	let clone=$(ele).clone(false)
	clone.attr("type","text")
	let ele1=$(ele)
	clone.attr("placeholder", ele1.attr('placeholder'))
	$(ele).after(clone)
	$(ele).hide()
	clone.mouseenter(()=>{
		ele1.show()
		clone.hide()
	})

	$(ele).mouseleave(()=>{
		let newv=Number(ele1.val()).toLocaleString("ru");
		if(clone.val()==newv){
			$(clone).show();
			$(ele1).hide();
		} else {
			if(newv == "0"){
				clone.val("")
				return
			};
			clone.val(newv);
		};
	});
	$(ele).change(()=>{
		$(clone).show();
		$(ele1).hide();
		let newv=Number(ele1.val()).toLocaleString("ru");
		if(clone.val()!=newv){
			if(newv == "0"){
				clone.val("")
				return
			};
			clone.val(newv);
		}
	});
  });

  $("[data-cc-type='calculate']").click(function(event) {
	let request_body;
	if (curr_calc == 'fc') {
	  request_body = collect_fc_data();
	};
	if (curr_calc == 'phc') {
	  request_body = collect_phc_data();
	};
	if (curr_calc == 'sf') {
	  request_body = collect_sf_data();
	};
	if (curr_calc == 'asf') {
	  request_body = collect_asf_data();
	};
	if (curr_calc == 'dc') {
	  request_body = collect_dc_data();
	};
	if (curr_calc == 'ac') {
	  request_body = collect_ac_data();
	};
	send_calculations(request_body);
  });

  $("[data-cc-type='calculation-year-dropdown']").change(function() {
	hide_step_bigger(0);
	let next = $(this).attr('data-cc-next');
	load_next(next);
  });

  $("[data-cc-type='calculation-city-dropdown']").change(function() {
	hide_step_bigger(1);
	let next = $(this).attr('data-cc-next');
	load_next(next);
  });


  $("[data-cc-type='calculation-choise']").click(function(event) {
	hide_step_bigger(2);
	$("[data-cc-type='calculation-choise']").prop( "checked", false );
	$("[data-cc-type='calculation-container']").slideUp();
	$(this).prop( "checked", true );
	curr_calc = $(this).attr('data-cc-name');
	$(`[data-cc-type='calculation-container'][data-cc-name='${curr_calc}']`).slideDown();
	let next = $(this).attr('data-cc-next');
	load_next(next);
  });


  $("[data-cc-type='calculation-court-dropdown']").change(function() {
	hide_next_elements('calculation-court-dropdown');
	let next = $(this).attr('data-cc-next');
	load_next(next);
  });

  $("[data-cc-type='calculation-category-dropdown']").change(function() {
	hide_next_elements('calculation-category-dropdown');
	let next = $(this).attr('data-cc-next');
	load_next(next);
  });

  $("[data-cc-type='calculation-post-dropdown']").change(function() {
	hide_next_elements('calculation-post-dropdown');
	let next = $(this).attr('data-cc-next');
	load_next(next);
  });

  function load_next(next, elem) {
	console.log(next)
	if (next == "calculation-city-dropdown") {
		get_cities($(`[data-cc-type='calculation-year-dropdown']`).val())
		return;
	};
	if (next == 'calculation-choise') {
		let city = $(`[data-cc-type='calculation-city-dropdown']`).val();
		let year = $(`[data-cc-type='calculation-year-dropdown']`).val();
		console.log('123');
		get_calculation_choises(city, year);
		return;
	};
	if (next == 'calculation-court-dropdown') {
		let city = $(`[data-cc-type='calculation-city-dropdown']`).val();
		let year = $(`[data-cc-type='calculation-year-dropdown']`).val();
		get_courts(city, year);
		return;
	};
	if (next == 'calculation-post') {
		let city = $(`[data-cc-type='calculation-city-dropdown']`).val();
		let year = $(`[data-cc-type='calculation-year-dropdown']`).val();
		get_posts(city, year);
		return;
	};
	if (next == "calculation-category-dropdown") {
		let city = $(`[data-cc-type='calculation-city-dropdown']`).val();
		let year = $(`[data-cc-type='calculation-year-dropdown']`).val();
		let court = $(`[data-cc-type='calculation-court-dropdown'][data-cc-name='${curr_calc}']`).val();
		get_disputes(city, year, court);
		return;
	};
	$(`[data-cc-type='${next}-container'][data-cc-name='${curr_calc}']`).slideDown();

  };

  $("[data-cc-type='calculation-instance-checkbox']").change(function() {
	let counter = $(this).attr( "data-cc-counter");
	if ($(this).prop( "checked")) {
		$(`[data-cc-type='calculation-instance-counter-container'][data-cc-name='${curr_calc}'][data-cc-counter='${counter}']`).show();
	} else {
		$(`[data-cc-type='calculation-instance-counter-container'][data-cc-name='${curr_calc}'][data-cc-counter='${counter}']`).hide();
	};
  });

  function load_posts_events() {
	$("[data-cc-type='calculation-post-checkbox']").change(function() {
		let counter = $(this).attr( "data-cc-counter");
		console.log("counter")
		if ($(this).prop( "checked")) {
			$(`[data-cc-type='calculation-post-counter-container'][data-cc-name='${curr_calc}'][data-cc-counter='${counter}']`).show();
		} else {
			$(`[data-cc-type='calculation-post-counter-container'][data-cc-name='${curr_calc}'][data-cc-counter='${counter}']`).hide();
		};
	});
  };

  $("[data-cc-type='calculation-claim-sum'][data-cc-name='asf']").on('input', function() {
	if ($(this).val() > 100000000) {
		$("[data-cc-type='calculation-difficulty-factor'][data-cc-name='asf'][value='Сумма иска выше 10 млн рублей']").prop( "checked", true );
	} else {
		$("[data-cc-type='calculation-difficulty-factor'][data-cc-name='asf'][value='Сумма иска выше 10 млн рублей']").prop( "checked", false );
	};
  });

  function get_cities(year_num) {
    $.ajax({
	  url: `${url_base}research_city/get_cities/`,
	  method: 'get',
	  dataType: 'json', 
	  data: {year: year_num},
	  success: function(data){
		fill_cities_drop_down(data);
		$(`[data-cc-type='calculation-city-dropdown-container']`).slideDown();
	  },
	  error: function (jqXHR, exception) {
		alert(jqXHR.responseText);
	  }
	});
  };

  function get_calculation_choises(city, year) {
    $.ajax({
	  url: `${url_base}research_city/get_calculations/`,
	  method: 'get',
	  dataType: 'json', 
	  data: {year: year, city: city},
	  success: function(data){
		fill_calculation_choises(data);
		$(`[data-cc-type='calculation-choise-container']`).slideDown();
	  },
	  error: function (jqXHR, exception) {
		alert(jqXHR.responseText);
	  }
	});
  };

  function get_courts(city, year) {
    $.ajax({
	  url: `${url_base}${calc_name()}/dispute_by_city/`,
	  method: 'get',
	  dataType: 'json', 
	  data: {year: year, city: city},
	  success: function(data){
		fill_courts_drop_down(data);
		$(`[data-cc-type='calculation-court-dropdown-container'][data-cc-name='${curr_calc}']`).slideDown();
	  },
	  error: function (jqXHR, exception) {
		alert(jqXHR.responseText);
	  }
	});
  };

  function get_posts(city, year) {
    $.ajax({
	  url: `${url_base}${calc_name()}/posts_by_city/`,
	  method: 'get',
	  dataType: 'json', 
	  data: {year: year, city: city},
	  success: function(data){
		fill_posts(data);
		$(`[data-cc-type='calculation-post-container'][data-cc-name='${curr_calc}']`).slideDown();
		load_posts_events();
	  },
	  error: function (jqXHR, exception) {
		alert(jqXHR.responseText);
	  }
	});
  };

  function get_disputes(city, year, court) {
    $.ajax({
	  url: `${url_base}${calc_name()}/dispute_by_city/`,
	  method: 'get',
	  dataType: 'json', 
	  data: {year: year, city: city, court: court},
	  success: function(data){
		fill_categories_drop_down(data);
		$(`[data-cc-type='calculation-category-dropdown-container'][data-cc-name='${curr_calc}']`).slideDown();;
	  },
	  error: function (jqXHR, exception) {
		alert(jqXHR.responseText);
	  }
	});
  };


  function fill_cities_drop_down(data) {
	clear_dropdowns($(`[data-cc-type='calculation-city-dropdown']`), 'Регион');
	$.each(data['cities'], function(index, value){
	  $(`[data-cc-type='calculation-city-dropdown']`).append($("<option>").attr('value', value).text(value));
	});
  };

  function fill_years_drop_down(data) {
	clear_dropdowns($(`[data-cc-type='calculation-year-dropdown']`), 'Укажите год');
	$.each(data['years'], function(index, value){
	  $(`[data-cc-type='calculation-year-dropdown']`).append($("<option>").attr('value', value).text(value));
	});
  };

  function fill_calculation_choises(data) {
	$(`[data-cc-type='calculation-choise-inpfield']`).hide()
	$.each(data['calculations'], function(index, value){
	  let short_name = calc_short_name(value)
	  $(`[data-cc-type='calculation-choise-inpfield'][data-cc-name='${short_name}']`).show()
	});
  };

  function fill_posts(data) {
	$(`[data-cc-type='calculation-post-checkboxes-container'][data-cc-name='${curr_calc}']`).html('');
	$.each(data['posts'], function(index, value){
		if (value == null) {value='Расчёт для всех должностей'};
		$(`[data-cc-type='calculation-post-checkboxes-container'][data-cc-name='${curr_calc}']`).append(
			`
			<div class="numfield-row">
				<div class="inpfield red">
					<input type="checkbox" id="role${index}" value="${value}" data-cc-type="calculation-post-checkbox" data-cc-name="phc"  data-cc-counter=${index}> 
					<label for="role${index}">
						<div class="labelCalc">${value}</div>
					</label>
				</div>
				<div class="numfield" data-cc-type="calculation-post-counter-container" data-cc-name="phc" data-cc-counter=${index} style="display:none;">
					<input type="number" step="1" min="1" max="99" value=1 title="Кол." class="input-text qty text" size="10" data-cc-type="calculation-post-counter" data-cc-name="phc" data-cc-counter=${index}>
					<span></span>
				</div>
			</div>
			`
		);
	});
  };

  function fill_courts_drop_down(data) {
	clear_dropdowns($(`[data-cc-type='calculation-court-dropdown'][data-cc-name='${curr_calc}']`), 'Суд');
	let courts = new Set();
	$.each(data, function(index, value){
		courts.add(value['court_type']);
	});
	courts.forEach(function(value){
	  $(`[data-cc-type='calculation-court-dropdown'][data-cc-name='${curr_calc}']`).append($("<option>").attr('value', value).text(value));
	});
  };

  function fill_categories_drop_down(data) {
	clear_dropdowns($(`[data-cc-type='calculation-category-dropdown'][data-cc-name='${curr_calc}']`), 'Категория спора');
	$.each(data, function(index, value){
	  if (value['dispute'] == null) {value['dispute']='Расчёт для всех категорий'};
	  $(`[data-cc-type='calculation-category-dropdown'][data-cc-name='${curr_calc}']`).append($("<option>").attr('value', value['dispute']).text(value['dispute']));
	});
  };

  function hide_step_bigger(step) {
	$(`[data-cc-step]`).filter(function() {
	  return $(this).attr("data-cc-step") > step;
	}).slideUp();
  };

  function hide_next_elements(elem_name) {
	hide_step_bigger($(`[data-cc-type='${elem_name}-container'][data-cc-name='${curr_calc}']`).attr('data-cc-step'));
  };

  function clear_dropdowns(elem, text) {
	elem.html(`<option value="" disabled selected>${text}</option>`);
  };

  function collect_fc_data() {
	let request_body = {};
	request_body["city"] = $("[data-cc-type='calculation-city-dropdown']").val();
	request_body["year"] = $("[data-cc-type='calculation-year-dropdown']").val();
	request_body["court_type"] = $("[data-cc-type='calculation-court-dropdown'][data-cc-name='fc']").val();
	let dispute = $("[data-cc-type='calculation-category-dropdown'][data-cc-name='fc']").val();
	if (dispute != 'Расчёт для всех категорий') {request_body["dispute"]=dispute};
	let instances = [];
	$("[data-cc-type='calculation-instance-checkbox'][data-cc-name='fc']:checked").each(function() {
		let instance_name = $( this ).val();
		let counter = $(this).attr( "data-cc-counter");
		let count = $(`[data-cc-type='calculation-instance-counter'][data-cc-name='fc'][data-cc-counter='${counter}']`).val();
		instances.push({instance: instance_name, count: count});
	});
	request_body["instances"] = instances;
	let difficulty_factors = [];
	$("[data-cc-type='calculation-difficulty-factor'][data-cc-name='fc']:checked").each(function() {
		difficulty_factors.push($( this ).val());
	});
	request_body["difficulty_factors"] = difficulty_factors;
	return request_body;
  };

  function collect_dc_data() {
	let request_body = {};
	request_body["city"] = $("[data-cc-type='calculation-city-dropdown']").val();
	request_body["year"] = $("[data-cc-type='calculation-year-dropdown']").val();
	request_body["court_type"] = $("[data-cc-type='calculation-fixed-court-dropdown'][data-cc-name='dc']").val();
	let documents = [];
	$("[data-cc-type='calculation-instance-checkbox'][data-cc-name='dc']:checked").each(function() {
		let document_name = $( this ).val();
		let counter = $(this).attr( "data-cc-counter");
		let count = $(`[data-cc-type='calculation-instance-counter'][data-cc-name='dc'][data-cc-counter='${counter}']`).val();
		documents.push({name: document_name, count: count});
	});
	request_body["documents"] = documents;
	return request_body;
  };

  function collect_sf_data() {
	let request_body = {};
	request_body["city"] = $("[data-cc-type='calculation-city-dropdown']").val();
	request_body["year"] = $("[data-cc-type='calculation-year-dropdown']").val();
	request_body["court_type"] = $("[data-cc-type='calculation-court-dropdown'][data-cc-name='sf']").val();
	let dispute = $("[data-cc-type='calculation-category-dropdown'][data-cc-name='sf']").val();
	if (dispute != 'Расчёт для всех категорий') {request_body["dispute"]=dispute};
	request_body["claim_sum"] = $("[data-cc-type='calculation-claim-sum'][data-cc-name='sf']").val();
	return request_body;
  };

  function collect_asf_data() {
	let request_body = {};
	request_body["city"] = $("[data-cc-type='calculation-city-dropdown']").val();
	request_body["year"] = $("[data-cc-type='calculation-year-dropdown']").val();
	request_body["court_type"] = $("[data-cc-type='calculation-court-dropdown'][data-cc-name='asf']").val();
	let dispute = $("[data-cc-type='calculation-category-dropdown'][data-cc-name='asf']").val();
	if (dispute != 'Расчёт для всех категорий') {request_body["dispute"]=dispute};
	request_body["claim_sum"] = $("[data-cc-type='calculation-claim-sum'][data-cc-name='asf']").val();
	let instances = [];
	$("[data-cc-type='calculation-instance-checkbox'][data-cc-name='asf']:checked").each(function() {
		let instance_name = $( this ).val();
		let counter = $(this).attr( "data-cc-counter");
		let count = $(`[data-cc-type='calculation-instance-counter'][data-cc-name='asf'][data-cc-counter='${counter}']`).val();
		instances.push({instance: instance_name, count: count});
	});
	request_body["instances"] = instances;
	let difficulty_factors = [];
	$("[data-cc-type='calculation-difficulty-factor'][data-cc-name='asf']:checked").each(function() {
		difficulty_factors.push($( this ).val());
	});
	request_body["difficulty_factors"] = difficulty_factors;
	return request_body;
  };


  function collect_ac_data() {
	let request_body = {};
	request_body["city"] = $("[data-cc-type='calculation-city-dropdown']").val();
	request_body["year"] = $("[data-cc-type='calculation-year-dropdown']").val();
	request_body["court_type"] = $("[data-cc-type='calculation-fixed-court-dropdown'][data-cc-name='ac']").val();
	let documents = [];
	$("[data-cc-type='calculation-instance-checkbox'][data-cc-name='ac']:checked").each(function() {
		let document_name = $( this ).val();
		let counter = $(this).attr( "data-cc-counter");
		let count = $(`[data-cc-type='calculation-instance-counter'][data-cc-name='ac'][data-cc-counter='${counter}']`).val();
		documents.push({name: document_name, count: count});
	});
	request_body["documents"] = documents;
	request_body["court_count"] = $("[data-cc-type='calculation-court-count'][data-cc-name='ac']").val();
	return request_body;
  };

  function collect_phc_data() {
	let request_body = {};
	request_body["city"] = $("[data-cc-type='calculation-city-dropdown']").val();
	request_body["year"] = $("[data-cc-type='calculation-year-dropdown']").val();
	let posts = [];
	$("[data-cc-type='calculation-post-checkbox'][data-cc-name='phc']:checked").each(function() {
		let post_name = $( this ).val();
		if (post_name == 'Расчёт для всех должностей') {post_name=null;};
		let counter = $(this).attr( "data-cc-counter");
		let count = $(`[data-cc-type='calculation-post-counter'][data-cc-name='phc'][data-cc-counter='${counter}']`).val();
		posts.push({post: post_name, count: count});
	});
	request_body["posts"] = posts;
	return request_body;
  };


  function send_calculations(request_body) {
	console.log(request_body);
	$.ajax({
	  url: `${url_base}calculate_${calc_name()}/`,
	  method: "POST",
	  dataType: 'json', 
	  contentType : 'application/json',
	  data: JSON.stringify(request_body),
	  success: function(data){
		console.log(data);
		fill_calculations_results(data);
	  },
	  error: function (jqXHR, exception) {
		alert(jqXHR.responseText);
	  }
	});
  };

  function fill_calculations_results(data) {
	$("[data-cc-type='result-info']").hide();
	let results_elem = $(`[data-cc-type='calculation-results']`);
	let results_info_elem = $(`[data-cc-type='result-info-container']`);
	$('#results-section').slideUp()
	results_elem.html('');
	results_info_elem.html('');
	let city = $(`[data-cc-type='calculation-city-dropdown'][data-cc-name='${curr_calc}']`).val();
	$.each(data['results'], function(index, value){
		results_elem.append(`<li class="pageCalculator__tabs-item" data-cc-type="result-item" data-cc-num=${index} ><span class="calc-group">${value['qualification']}</span><span class="calc-digit">${value['result_cost']} руб.</span></li>`);
		if (index == 0) {
			results_info_elem.append(`<div class="pcalc-box"  data-cc-type="result-info" data-cc-num=${index}>${value['calc_info']}</div>`)
		} else {
			results_info_elem.append(`<div class="pcalc-box"  data-cc-type="result-info" data-cc-num=${index} style="display:none;">${value['calc_info']}</div>`)
		};
	});
	$('#results-section').slideDown(function(data){
		window.scrollTo({top: $('#results-section').position().top, behavior: 'smooth'});
	});
	set_results_event();
  };

  function set_results_event() {
	  $("[data-cc-type='result-item']").click(function(event) {
		let num = $(this).attr("data-cc-num");
		$("[data-cc-type='result-info']").hide();
		$(`[data-cc-type='result-info'][data-cc-num='${num}']`).show();
		$("[data-cc-type='result-item']").removeClass('active');
		$(this).addClass('active');
	  });
	};

  function calc_name(cc) {
	if (cc == null) {
		cc = curr_calc
	};
	if (cc == 'fc') {
	  return 'fixed_costs';
	};
	if (cc == 'phc') {
	  return 'per_hour_costs';
	};
	if (cc == 'sf') {
	  return 'success_fee';
	};
	if (cc == 'asf') {
	  return 'additional_success_fee';
	};
	if (cc == 'dc') {
	  return 'documents_costs';
	};
	if (cc == 'ac') {
	  return 'actions_costs';
	};
  };

  function calc_short_name(cc) {
	if (cc == 'fixed_costs') {
	  return 'fc';
	};
	if (cc == 'per_hour_costs') {
	  return 'phc';
	};
	if (cc == 'success_fee') {
	  return 'sf';
	};
	if (cc == 'additional_success_fee') {
	  return 'asf';
	};
	if (cc == 'documents_costs') {
	  return 'ac';
	};
	if (cc == 'actions_costs') {
	  return 'ac';
	};
  };

});
</script>
