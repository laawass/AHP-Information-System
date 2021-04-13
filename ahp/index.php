
<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>

	<section class="content">
			<h1 class="ui header">TOTORO SCHOLARSHIP</h1>

			<p>Totoro Foundation is an independent family philanthropy organisation founded by Indonesian entrepreneurs Melanni Totoro and her partner Laura in 2010.</p>
			
			<p>The Foundation focuses on improving access to knowledge and education, with a specific focus on countries in which Totoro has business presence, including Indonesia, Singapore and China.</p>

			<p>Key activities include providing access to education through the provision of more than 20,000 scholarships (as of 2020), improving the quality of schools and teaching, and funding medical research into diseases prevalent in Asian populations.</p>
			
			<p>In 2018 the Foundation announced a refreshed strategy including four targets: </p>
			
			<ol class="ui list">
				<li>Contribute to the reduction of the stunting rate in Indonesia to below 20% by 2030,</li>
				<li>Help Indonesia become one of the five most improved countries in the OECD's Programme for International Student Assessment (PISA) ranking system by 2030.</li>
				<li>Catalyse preventive and integrative medical research efforts into Asian prevalent diseases to extend the average health span of Asians by five years, by 2030.</li>
				<li>Support the development of a community of leaders who are making a positive impact on society.</li>
			</ol>

			<br>
			
			<h2 class="ui header">Totoro Scholarship is using Analitycal Hierarchy Process (AHP) to select the sholarship</h2>
			
			<h3 class="ui header">Instruction:</h3>
			<ol class="ui list">
				<li>Click "Criteria" in the left side and read the list of criteria that Totoro Scholarship use. After that click "Continue"</li>
				<li>Input the name of user in "Alternative". After that click "continue"</li>
				<li>Input the value comparison of criteria (see the table bellow for reference). Before that, don't forget to choose which one is more important.</li>
				<li>Click "submit". Then input conparison of Alternative in each criteria</li>
				<li>You can see the table of matrix of each criteria, after you done, click "continue"</li>
				<li>Then you can see the final calculation result and the rank of each user (alternative). </li>

			</ol>
			<h3 class="ui header">The fundamental scale for pair-wise comparisons (Saaty, 2001)</h3>
			<table class="ui collapsing striped blue table">
				<thead>
					<tr>
						<th>Intensity of Importance</th>
						<th>Definition <em>(Explanation)</em></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center aligned">1</td>
						<td>Same <em>(Neither of the two alternatives is preferable over the other)</em></td>
					</tr>
					<tr>
						<td class="center aligned">3</td>
						<td>Weak <em>(One alternative is preferred slightly over the other )</em></td>
					</tr>
					<tr>
						<td class="center aligned">5</td>
						<td>Clear <em>(One alternative is preferred clearly over the other)</em></td>
					</tr>
					<tr>
						<td class="center aligned">7</td>
						<td>Strong <em>(One alternative is preferred strongly over the other)</em></td>
					</tr>
					<tr>
						<td class="center aligned">9</td>
						<td>Very Strong <em>(One alternative is preferred very strongly over the other)</em></td>
					</tr>
					<tr>
						<td class="center aligned">2,4,6,8</td>
						<td>Compromise <em>(Can be used for graduation between evaluation)</em></td>
					</tr>
					
				</tbody>
			</table>

	</section>

<?php include('footer.php'); ?>
