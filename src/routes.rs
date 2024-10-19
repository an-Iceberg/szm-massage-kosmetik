use actix_web::{delete, get, post, put, patch, HttpResponse};
use tera::Context;
use crate::TERA;

#[get("/")]
async fn index() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "SzM");
  context.insert("header_text", "SzM");

  let body = TERA.render("pages/index.html", &context).expect("Failed to render index.html");

  HttpResponse::Ok().body(body)
}

#[get("/buchung")]
async fn buchung() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "SzM — Buchung");
  context.insert("header_text", "Buchung erstellen");

  let body = TERA.render("pages/buchung.html", &context).expect("Failed to render buchung.html");

  HttpResponse::Ok().body(body)
}

#[get("/ueber-mich")]
async fn ueber_mich() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "SzM — Über mich");
  context.insert("header_text", "Über mich");

  let body = TERA.render("pages/ueber-mich.html", &context).expect("Failed to render ueber-mich.html");

  HttpResponse::Ok().body(body)
}

#[get("/standort")]
async fn standort() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "SzM — Standort");
  context.insert("header_text", "Standort");

  let body = TERA.render("pages/standort.html", &context).expect("Failed to render standort.html");

  HttpResponse::Ok().body(body)
}

#[get("/angebot")]
async fn angebot() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "SzM — Angebot");
  context.insert("header_text", "Angebot");

  let body = TERA.render("pages/angebot.html", &context).expect("Failed to render angebot.html");

  HttpResponse::Ok().body(body)
}

#[get("/gutschein")]
async fn gutschein() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "SzM — Gutschein");
  context.insert("header_text", "Gutschein");

  let body = TERA.render("pages/gutschein.html", &context).expect("Failed to render gutschein.html");

  HttpResponse::Ok().body(body)
}

#[get("/kontakt")]
async fn kontakt() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "SzM — Kontakt");
  context.insert("header_text", "Kontakt");

  let body = TERA.render("pages/kontakt.html", &context).expect("Failed to render kontakt.html");

  HttpResponse::Ok().body(body)
}
