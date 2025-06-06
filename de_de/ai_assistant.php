<?php declare(strict_types=1);
if (!defined('MW_PATH')) {
    exit('No direct script access allowed');
}

/**
 * Translation file for "ai_assistant" category.
 *
 * This translation is automatically generated by the Translate extension.
 *
 * @package MailWizz EMA
 * @author MailWizz Development Team <support@mailwizz.com>
 * @link https://www.mailwizz.com/
 * @copyright MailWizz EMA (https://www.mailwizz.com)
 * @license https://www.mailwizz.com/license/
 * @since 1.1
 */
return array (
    'AI Assistant' => 'KI-Assistent',
    'Topics' => 'Themen',
    'View topics' => 'Themen anzeigen',
    'Topic' => 'Thema',
    'Subject' => 'Betreff',
    'Prompt' => 'Eingabeaufforderung',
    'Create new topic' => 'Neues Thema erstellen',
    'The subject will appear when starting a new conversation.' => 'Der Betreff wird angezeigt, wenn eine neue Unterhaltung gestartet wird.',
    'This is the prompt that will always be sent as context for the conversation.' => 'Dies ist die Eingabeaufforderung, die immer als Kontext für die Unterhaltung gesendet wird.',
    'Chat GPT 3.5 turbo' => 'Chat GPT 3.5 Turbo',
    'Chat GPT 4' => 'Chat GPT 4',
    'Text completion DaVinci 003' => 'Textvervollständigung DaVinci 003',
    'Enabled for customers' => 'Für Kunden aktiviert',
    'Customers use system OpenAI account' => 'Kunden verwenden das System-OpenAI-Konto',
    'Customers add own OpenAI account' => 'Kunden fügen eigenes OpenAI-Konto hinzu',
    'Provide AI Assistant only for these customer groups' => 'KI-Assistent nur für diese Kundengruppen bereitstellen',
    'Secret key' => 'Geheimer Schlüssel',
    'Model' => 'Modell',
    'Max tokens' => 'Maximale Tokens',
    'Temperature' => 'Temperatur',
    'Frequency penalty' => 'Häufigkeitsstrafe',
    'Presence penalty' => 'Präsenzstrafe',
    'Stop' => 'Stopp',
    'The access secret key for OpenAI API' => 'Der geheime Zugangsschlüssel für die OpenAI-API',
    'Whether the customers can use this feature' => 'Ob die Kunden diese Funktion nutzen können',
    'Whether customer can use the system OpenAI account if they don\'t have their own account' => 'Ob Kunden das System-OpenAI-Konto nutzen können, wenn sie kein eigenes Konto haben',
    'Whether customer can add their own OpenAI account' => 'Ob Kunden ihr eigenes OpenAI-Konto hinzufügen können',
    'The maximum number of tokens to generate in the completion. The token count of your prompt plus max_tokens cannot exceed the models context length. Most models have a context length of 2048 tokens (except for the newest models, which support 4096). We limited this to 2000 to make sure there are enough tokens for the response.' => 'Die maximale Anzahl von Tokens, die in der Vervollständigung generiert werden. Die Anzahl der Tokens Ihrer Eingabeaufforderung plus max_tokens darf die Kontextlänge des Modells nicht überschreiten. Die meisten Modelle haben eine Kontextlänge von 2048 Tokens (außer die neuesten Modelle, die 4096 unterstützen). Wir haben dies auf 2000 begrenzt, um sicherzustellen, dass genügend Tokens für die Antwort verfügbar sind.',
    'What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. We generally recommend altering this or top_p but not both.' => 'Welche Sampling-Temperatur verwendet werden soll, zwischen 0 und 2. Höhere Werte wie 0,8 machen die Ausgabe zufälliger, während niedrigere Werte wie 0,2 sie fokussierter und deterministischer machen. Wir empfehlen im Allgemeinen, dies oder top_p zu ändern, aber nicht beides.',
    'Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the models likelihood to repeat the same line verbatim. See more information about frequency and presence penalties.' => 'Zahl zwischen -2,0 und 2,0. Positive Werte bestrafen neue Tokens basierend auf ihrer bisherigen Häufigkeit im Text, wodurch die Wahrscheinlichkeit des Modells verringert wird, dieselbe Zeile wörtlich zu wiederholen. Weitere Informationen zu Häufigkeits- und Präsenzstrafen finden Sie hier.',
    'Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the models likelihood to talk about new topics. See more information about frequency and presence penalties.' => 'Zahl zwischen -2,0 und 2,0. Positive Werte bestrafen neue Tokens basierend darauf, ob sie bisher im Text vorkommen, wodurch die Wahrscheinlichkeit des Modells erhöht wird, über neue Themen zu sprechen. Weitere Informationen zu Häufigkeits- und Präsenzstrafen finden Sie hier.',
    'Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence.' => 'Bis zu 4 Sequenzen, bei denen die API die Generierung weiterer Tokens stoppt. Der zurückgegebene Text enthält die Stoppsequenz nicht.',
    'Customers' => 'Kunden',
    'Here are some resources that might help you creating better prompts: {url}' => 'Hier sind einige Ressourcen, die Ihnen helfen könnten, bessere Eingabeaufforderungen zu erstellen: {url}',
);
